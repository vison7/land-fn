<!DOCTYPE html>
<html>
  <head>
    <title>Land Defenders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <link href="/assets/css/default.css?v=<?php echo time()?>" rel="stylesheet" type="text/css">
    <style>
      /* ---- grid ---- */

        .masonry-grid {
          /* background: #DDD; */
        }

        /* clear fix */
        .masonry-grid:after {
          content: '';
          display: block;
          clear: both;
        }

        /* ---- .grid-item ---- */

        .grid-sizer,
        .grid-my-item {
          width: 25%;
        }

        .grid-my-item {
          float: left;
        }

        .grid-my-item img {
          display: block;
          width: 100%;
          border-radius: 25px;
        }
        .grid-my-item-box{
          margin:5px;
          position:relative;
          transition: transform .2s;
        }
        .grid-my-item-box:hover {
          -ms-transform: scale(1.5); /* IE 9 */
          -webkit-transform: scale(1.5); /* Safari 3-8 */
          transform: scale(1.5); 
          z-index: 1000;

        }
        .grid-my-item-box-desc{
          position:absolute;
          text-align:center;
          width:95%;
          padding:5px;
          left: 5px;
          top:30%;
          background-color: #ccc;
          opacity:0.9;
          border-radius: 10px;
          font-family: "Luciole";
          color:#fff;
          padding-top:10px;
          padding-bottom:10px;
        }
        /* .grid-my-item-box-desc span{
          opacity:1 !important;
          color:#fff;
        } */

        .grid-my-item-box-desc-2{
          position:absolute;
          text-align:center;
          width:95%;
          padding:5px;
          left: 5px;
          top:30%;
          /* background-color: #ccc;
          opacity:0.6; */
          border-radius: 10px;
          font-family: "Luciole";
          color:#fff;
        }

        .grid-item--height2 { height: 200px; }
        .grid-item--height3 { height: 260px; }
        .grid-item--height4 { height: 360px; }

    </style>
  </head>
<body>
	