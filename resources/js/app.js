require('./bootstrap');

!function(e){"use strict";var i={},d={league:[]},r={leagueName:"League",dropdown:!1,zones:!1};function t(e,n){return e.goalDiff!==n.goalDiff?n.goalDiff-e.goalDiff:(r=n,(t=e).scored!==r.scored?r.scored-t.scored:function(e,n){return n.name.toLowerCase()<e.name.toLowerCase()}(t,r));var t,r}function l(e){return[].slice.apply(e)}function n(){d.league.forEach(function(e,n){e.position=n+1})}function o(){i.reversed=!i.reversed,d.league.reverse(),d.renderLeague()}function a(e){if(!Array.isArray(e))throw new Error("Invalid argument. Data must be passed within an array.")}function c(e){var n="string"==typeof e?e:e.name,t=d.league.map(function(e){return e.name}).filter(function(e){return e===n});return Boolean(t.length)}function u(){return Boolean(document.querySelector(".league-table table"))}function s(){u()?(i.override||d.sort(),d.renderLeague()):i.override||d.sort()}function f(){var e=document.querySelector(".league-table table"),n=document.createElement("tr");e.appendChild(n);var t=document.createElement("td");t.setAttribute("colspan","10");var r=document.createElement("div");r.setAttribute("class","toggle"),function(e){for(var n=0;n<3;n++)e.appendChild(document.createElement("div"))}(r),t.appendChild(r),n.appendChild(t),r.addEventListener("click",p)}function m(){var e=document.querySelectorAll(".league-table table tbody tr");i.toggleState="hidden",l(e).splice(r.dropdown,d.league.length).forEach(function(e){e.classList.add("hide-team")})}function p(){var e;document.querySelectorAll(".hide-team").length?(e=document.querySelectorAll(".hide-team"),i.toggleState="show",l(e).forEach(function(e,n){e.classList.remove("hide-team")})):m()}function h(){var e=document.querySelector(".league-table"),n=document.createElement("table"),t=document.createElement("caption");t.innerText=r.leagueName,e.appendChild(n),n.appendChild(t),function(e){var n=document.createElement("thead");e.appendChild(n);var a=document.createElement("tr");n.appendChild(a),["Pos","Team","GP","W","D","L","F","A","GD","Pts"].forEach(function(e){var n=document.createElement("th"),t=document.createElement("abbr");if("Pos"===e){var r=i.reversed?"&#9650":"&#9660",o=document.createElement("span");o.innerHTML=r,t.innerText=e,t.appendChild(o),t.id="reverseTable",n.appendChild(t),a.appendChild(n)}else t.innerText=e,n.appendChild(t),a.appendChild(n)}),function(e){var n=d.league,c=document.createElement("tbody");e.appendChild(c),n.forEach(function(e){var n=[],r=document.createElement("tr");for(var t in r.setAttribute("data",e.position),c.appendChild(r),e)e.hasOwnProperty(t)&&n.push(e[t]);var o,a,i=n[9];n.splice(9,1),n.unshift(i),n.forEach(function(e){var n=document.createElement("td"),t=document.createElement("span");t.innerText=e,n.appendChild(t),r.appendChild(n)}),o=l(r.cells)[8].firstChild,0<(a=o.innerText)?o.classList.add("plus"):a<0&&o.classList.add("minus")})}(e)}(n)}function g(){var e=r.zones;a(e);var n=document.querySelectorAll(".league-table tbody tr").length;e.forEach(function(e){if(n<e||e<0)throw new Error("Zone positions are not within valid team range.")});var t=l(document.querySelectorAll(".league-table table tbody tr"));e.forEach(function(n){t.forEach(function(e){Number(e.getAttribute("data"))===n&&e.classList.add("zone")})}),i.reversed&&r.zones&&l(document.querySelectorAll(".zone")).forEach(function(e){e.classList.remove("zone"),e.classList.add("zone-reverse")})}d.renderLeague=function(e){e&&(i.override=!1,function(e){for(var n in e)r.hasOwnProperty(n)&&(r[n]=e[n])}(e)),l(document.querySelector(".league-table").childNodes).forEach(function(e){"TABLE"!==e.nodeName&&!e.classList.contains("toggle")||e.parentNode.removeChild(e)}),h(),document.querySelector("#reverseTable").addEventListener("click",o),r.dropdown&&(!e&&"show"===i.toggleState?f():(f(),m())),r.zones.length&&g()},d.addTeam=function(e){return a(e),i.override=!1,e.forEach(function(e,n,t){if(c(e))throw new Error("Team name already exists.");t[n]={name:e,played:0,won:0,drawn:0,lost:0,scored:0,conceded:0,goalDiff:0,points:0},d.league.push(t[n])}),s(),d.league},d.sort=function(){return i.override=!1,d.league.sort(function(e,n){return e.points!==n.points?n.points-e.points:t(e,n)}),n(),i.reversed&&d.league.reverse(),u()&&d.renderLeague(),d.league},d.updateTeam=function(e){return a(e),e.forEach(function(n){if(!c(n))throw new Error("Team name does not exist.");var e=d.league.filter(function(e){return e.name===n.name})[0];for(var t in n.scored?n.scored=n.scored:n.scored=0,n.conceded?n.conceded=n.conceded:n.conceded=0,e.goalDiff=n.scored-n.conceded,n){if(!e.hasOwnProperty(t))throw new Error("Incorrect team property format passed.");e[t]=n[t]}}),i.override=!1,s(),d.league},d.deleteTeam=function(e){var t;if(!c(e))throw new Error("Team name does not exist.");i.override=!1;var r=e.toLowerCase();return d.league.forEach(function(e,n){e.name.toLowerCase()===r&&(t=n)}),d.league.splice(t,1),s(),d.league},d.override=function(t){i.override=!0,function(e){if(a(e),2<e.length)throw new Error("Only two teams can be swapped at a time.")}(t);var r={},o={};if(d.league.some(function(e){return e.position})||n(),2!==d.league.filter(function(e){return t[0]===e.position||t[1]===e.position}).length)throw new Error("Invalid team position(s).");return d.league.forEach(function(e,n){t[0]===e.position?(e.position=t[1],r.index=n,r.team=e):t[1]===e.position&&(e.position=t[0],o.index=n,o.team=e)}),d.league.forEach(function(e,n,t){n===r.index?t[n]=o.team:n===o.index&&(t[n]=r.team)}),s(),d.league},"function"==typeof e.define&&define.amd?e.define("soccer",[],function(){return d}):e.soccer=d}(this);


soccer.addTeam(['Sunderland Samba', 'Yav', 'Hillsong', 'North Shields']);
soccer.updateTeam(
    [{
        name: 'Sunderland Samba',
        played: 10,
        won: 8,
        drawn: 2,
        lost: 0,
        scored: 35,
        conceded: 12,
        points: 26
    },{
        name: 'YAV',
        played: 10,
        won: 8,
        drawn: 2,
        lost: 0,
        scored: 35,
        conceded: 12,
        points: 26
    },{
        name: 'Hillsong',
        played: 10,
        won: 8,
        drawn: 2,
        lost: 0,
        scored: 35,
        conceded: 12,
        points: 26
    },{
        name: 'North Shields',
        played: 10,
        won: 8,
        drawn: 2,
        lost: 0,
        scored: 35,
        conceded: 12,
        points: 26
    }
    ]

);
soccer.renderLeague({
    leagueName: 'North East Christian Fellowship League'
});
