var postlst=stoJSON(readfile('/blog/docs/list.json'))["list"];
var posttmp=stoHTML(readfile('/TEMP/docs_TEMP.html'));
var sposttmp=stoHTML(readfile('/TEMP/docs_TEMP_small.html'));

var big=false;
console.log('docs list:');
console.log(postlst);
for(var i of postlst){
  console.log("getting docs: "+i);
  var postcfg=stoJSON(readfile('./docs/'+i+'/settings.json'));
  console.log("docs setting: ");
  console.log(postcfg);
  if(!postcfg["hide"]){
    if(big){
      var nwp=stoHTML(readfile('./docs/'+i+`/docs.html`));
      nwp.querySelector('#a').href="./docs/?doc="+i;
      posttmp.querySelector('#docshere').innerHTML=nwp.innerHTML;
      document.getElementById('docs').innerHTML+=posttmp.innerHTML;
    }else{
      sposttmp.querySelector('#docshere').innerHTML=postcfg["title"];
      sposttmp.querySelector('#docshere').href="./docs/?doc="+i;
      document.getElementById('docs').innerHTML+=sposttmp.innerHTML;
    }
  }
}