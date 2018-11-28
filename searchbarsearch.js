// JavaScript Document
var a = document.getElementById('searchbox');
    a.addEventListener('submit',function(e) {
		"use strict";
        e.preventDefault();
        var b = document.getElementById('sitesearch').value;
        window.location.href = 'YOUR WEBSITE GOES HERE/'+b;
    });

