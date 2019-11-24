<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     <script>
      $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable div").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
      });
      </script>
    <style type="text/css">
        /*.darkMode {
            background-color: #000;
            color: #fff;
        }*/
        .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
          background-color: #000;
          border-radius: 25px;
        }

        .switch input { 
          opacity: 0;
          width: 0;
          height: 0;
        }

        .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          /*--transition: .4s;*/
          transition: .4s;
        }

        .slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          transition: .4s;
        }

        input:checked + .slider {
          background-color: #2196F3;
        }

        input:focus + .slider {
          box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }

        .slider.round {
          border-radius: 14px;
        }

        .slider.round:before {
          border-radius: 50%;
        }
        .search-bar{
          float: right;
        }
            
            
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Articles</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
          <li><a href="#">Page 3</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <h1>Today's articles:</h1>
            <!-- <p>Dark Mode:
                <input type="checkbox" name="" id="dard_mode">
            </p> -->
            <div class="search-bar">
              <input type="text" placeholder="search content.." id="myInput">
              
            </div>
            <p>Dark mode
            <label class="switch">
              <input type="checkbox" name="" id="dark_mode">
              <span class="slider round"></span>
            </label>
            </p>
            @foreach($articles as $article)
            <a href="{{$article->url}}" target="_blank">
                
            <div id="myTable" class="row" style="border: 1px solid #000; padding: 2%; border-radius: 25px; background-color:">
                <div class="col-sm-3">
                    <img src="{{$article->urlToImage}}" width="200">
                </div>
                <div class="col-sm-9">
                    <h3>{{$article->title}}</h3>
                    <p>{{$article->description}}</p>
                    <p><b>Source:</b>{{$article->source->name}}</p>
                    <p><b>Published At:</b>{{$article->publishedAt}}</p>

                </div>
            </div>

            </a>

            @endforeach
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $("#dark_mode").on("click", function() {
                $("body").toggleClass("switch")
            })
        })
        $("#myarticle").on("keyup", function() {
   var g = $(this).val();
   $(".article").each( function() {
       var s = $(this).text();
       if (s.indexOf(g)!=-1) {
           $(this).parent().parent().show();
       }
       else {
           $(this).parent().parent().hide();
       }
   });
});


    </script>

    
</body>
</html>