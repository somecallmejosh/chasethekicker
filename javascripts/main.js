$(document).ready(function(){
  $('#map').goMap({
    maptype: 'TERRAIN',
    zoom: 3,
    markers: [
      {
        latitude : 30.417489, 
        longitude: -91.176415, 
        title : "June 2011",
        html: {
          content: '<span>LSU TrainingCamp</span>',
          popup: false
        }
      },
      {
        latitude : 29.951066, 
        longitude: -90.071532, 
        title: "June 2013",
        html: {
          content: '<span>Hammer Kicking Academy Exposure Camp</span>',
          popup: false
        }
      },
      {
        latitude : 42.963854, 
        longitude: -78.790875, 
        title : "June 2013",
        html: {
          content: '<span>Hammer Kicking Academy Exposure Camp</span>',
          popup: false
        }
      },
      {
        latitude : 43.001004, 
        longitude: -78.789286, 
        title : "June 2013",
        html: {
          content: '<span>U. of Buffalo Training Camp</span>',
          popup: false
        }
      },
      {
        latitude : 41.809252, 
        longitude: -72.259582, 
        title : "June 2013",
        html: {
          content: '<span>UCONN Training Camp</span>',
          popup: false
        }
      },
      {
        latitude : 41.692939, 
        longitude: -72.764929, 
        title : "July 2013",
        html: {
          content: '<span>Central CT State University Training Camp</span>',
          popup: false
        }
      },
      {
        latitude : 43.011678, 
        longitude: -88.231481, 
        title : "July 2013",
        html: {
          content: '<span>Kohls Scholarship Invitational Camp</span>',
          popup: false
        }
      },
      {
        latitude : 41.230698, 
        longitude: -73.064036, 
        title : "Winter Off Season",
        html: {
          content: '<span>Matt Nuzie\'s Kicking Camp</span>',
          popup: false
        }
      },
      {
        latitude : 40.726768, 
        longitude: -73.634295, 
        title : "August 2013",
        html: {
          content: '<span>Hammer Kicking Academy Camp</span>',
          popup: false
        }
      },
      {
        latitude : 41.408969, 
        longitude: -75.662412, 
        title : "September 2013",
        html: {
          content: '<span>Hammer Kicking Academy Camp</span>',
          popup: false
        }
      }
    ]
  });

});
