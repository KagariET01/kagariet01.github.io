/* Programming contest management system
 * Copyright © 2012 Luca Wehrstedt <luca.wehrstedt@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

var Config = new function () {
    var self = this;

    self.get_contest_list_url = function () {
        return "contests/";
    };

    self.get_contest_read_url = function (c_key) {
        return "contests/" + c_key;
    };

    self.get_task_list_url = function () {
        return "tasks/";
    };

    self.get_task_read_url = function (t_key) {
        return "tasks/" + t_key;
    };

    self.get_team_list_url = function () {
        return "teams/";
    };

    self.get_team_read_url = function (t_key) {
        return "teams/" + t_key;
    };

    self.get_user_list_url = function () {
        return "users/";
    };

    self.get_user_read_url = function (u_key) {
        return "users/" + u_key;
    };

    self.get_flag_url = function (t_key) {
        return "flags/" + t_key;
    };

    self.get_face_url = function (u_key) {
        return "faces/" + u_key;
    };

    self.get_submissions_url = function (u_key) {
        return "sublist/" + u_key;
    };

    self.get_score_url = function () {
        return "scores";
    };

    self.get_event_url = function (last_event_id) {
        return "events?last_event_id=" + last_event_id;
    };

    self.get_history_url = function () {
        return "history";
    };

    // return +1 if "a" is strictly better than "b"
    //        -1 if "a" is strictly worse  than "b"
    //        0  if they should have same rank
    // DO NOT use user["rank"] in this compare function
    self.compare_user = function(a, b) {
        var a_score = a["global"];
        var b_score = b["global"];
        if (a_score > b_score) {
            return +1;
        } else if (a_score < b_score) {
            return -1;
        } else {
            // Consider the time of the last score change.
            var a_last_score_change = a["last_score_change_global"];
            var b_last_score_change = b["last_score_change_global"];
            if (a_last_score_change > b_last_score_change) {
                return -1;
            } else if (a_last_score_change < b_last_score_change) {
                return +1;
            }
            return 0;
        }
    };

    self.filter_user = function(user) {
        return user["l_name"].startsWith('sprout-alumni');
    };
};
