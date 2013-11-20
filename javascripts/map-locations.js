$(document).ready(function(){
  // get lat and long from http://itouchmap.com/latlong.html
  $('#map').goMap({
    maptype: 'TERRAIN',
    zoom: 4,
    markers: [
      {
        latitude : 41.230698, 
        longitude: -73.064036, 
        title : "Winter Off Season",
        html: {
          content: '<h2>Winter Kicking Program</h2><p><a href="http://nuziekicking.com.p8.hostingprod.com/">Matt Nuzie\'s Kicking &amp; Punting</a></p>',
          popup: false
        }
      },
      {
        latitude : 40.726768, 
        longitude: -73.634295, 
        title : "August 2013",
        html: {
          content: '<h2>Skills Camp</h2><p><a href="http://www.hammerkickingacademy.com">Hammer Kicking Academy</a> Camp, August 2013</p>',
          popup: false
        }
      },
      {
        latitude : 30.417489, 
        longitude: -91.176415, 
        title : "June 2011",
        html: {
          content: '<h2>College Camp</h2><p>LSU, June 2011</p>',
          popup: false
        }
      },
      {
        latitude : 29.951066, 
        longitude: -90.071532, 
        title: "June 2013",
        html: {
          content: '<h2>Skills Camp</h2><p><a href="http://www.hammerkickingacademy.com">Hammer Kicking Academy</a>, June 2013</p>',
          popup: false
        }
      },
      {
        latitude : 42.963854, 
        longitude: -78.790875, 
        title : "June 2013",
        html: {
          content: '<h2>Exposure Camp</h2><p><a href="http://www.hammerkickingacademy.com">Hammer Kicking Academy</a>, June 2012 &amp; 2013</p>',
          popup: false
        }
      },
      {
        latitude : 43.001004, 
        longitude: -78.789286, 
        title : "June 2013",
        html: {
          content: '<h2>College Camp</h2><p>University of Buffalo, June 2013</p>',
          popup: false
        }
      },
      {
        latitude : 41.809252, 
        longitude: -72.259582, 
        title : "June 2013",
        html: {
          content: '<h2>College Camp</h2><p>UCONN, June 2012 & 2013</p>',
          popup: false
        }
      },
      {
        latitude : 41.692939, 
        longitude: -72.764929, 
        title : "July 2013",
        html: {
          content: '<h2>Training Camp</h2><p>Central CT State University, July 2013</p>',
          popup: false
        }
      },
      {
        latitude : 43.011678, 
        longitude: -88.231481, 
        title : "July 2013",
        html: {
          content: '<h2>Scholarship Invitational Camp</h2><p><a href="http://kohlskicking.com/">Kohls Kicking Camp</a>, July 2013</p>',
          popup: false
        }
      },
      {
        latitude : 41.408969, 
        longitude: -75.662412, 
        title : "September 2013",
        html: {
          content: '<h2>Skills Camp</h2><p><a href="http://www.hammerkickingacademy.com">Hammer Kicking Academy</a> Camp, September 2013</p>',
          popup: false
        }
      }
    ]
  });
});
