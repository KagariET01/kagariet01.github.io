// Source: https://github.com/ankitrohatgi/tarballjs/blob/master/tarball.js

export interface IFile {
  name: string;
  type: string;
  size: number;
  header_offset: number;
}

export default class TarReader {
  files: IFile[];

  constructor(public buffer: ArrayBuffer) {
    this._readFileInfo();
  }

  _readFileInfo() {
    this.files = [];
    let offset = 0;
    let file_size = 0;
    let file_name = '';
    let file_type = null;
    while (offset < this.buffer.byteLength - 512) {
      file_name = this._readFileName(offset); // file name
      if (file_name.length == 0) {
        break;
      }
      file_type = this._readFileType(offset);
      file_size = this._readFileSize(offset);

      this.files.push({
        name: file_name,
        type: file_type,
        size: file_size,
        header_offset: offset,
      });

      offset += 512 + 512 * Math.trunc(file_size / 512);
      if (file_size % 512) {
        offset += 512;
      }
    }
  }

  _readString(str_offset: number, size: number) {
    const strView = new Uint8Array(this.buffer, str_offset, size);
    const i = strView.indexOf(0);
    const td = new TextDecoder();
    return td.decode(strView.slice(0, i));
  }

  _readFileName(header_offset: number) {
    const name = this._readString(header_offset, 100);
    return name;
  }

  _readFileType(header_offset: number) {
    // offset: 156
    const typeView = new Uint8Array(this.buffer, header_offset + 156, 1);
    const typeStr = String.fromCharCode(typeView[0]);
    if (typeStr == '0') {
      return 'file';
    } else if (typeStr == '5') {
      return 'directory';
    } else {
      return typeStr;
    }
  }

  _readFileSize(header_offset: number) {
    // offset: 124
    const szView = new Uint8Array(this.buffer, header_offset + 124, 12);
    let szStr = '';
    for (let i = 0; i < 11; i++) {
      szStr += String.fromCharCode(szView[i]);
    }
    return parseInt(szStr, 8);
  }

  _readFileBinary(file_offset: number, size: number) {
    const view = new Uint8Array(this.buffer, file_offset, size);
    return view;
  }

  getFileBinary(file_name: string) {
    const info = this.files.find((info) => info.name == file_name);
    if (info) {
      return this._readFileBinary(info.header_offset + 512, info.size);
    }
  }
}
