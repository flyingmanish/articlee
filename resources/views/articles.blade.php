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
          /*-webkit-transition: .4s;*/
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
            
        .dark_mode {
          background-color:#000;
          color:#fff;          
        }
        /*.nav [type=text] {
          float: right;
          padding: 6px;
          border: none;
          margin-top: 8px;
          margin-right: 16px;
          font-size: 17px;
        }*/

    </style>
</head>
<body>
        <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        Dark mode: <input id="dark_mode_btn" type="checkbox" name="">
      </div>
      <h1>Articles:</h1>
        @foreach($articles as $article)
          <div class="row" style="border: 1px solid #ccc; border-radius: 10px; padding: 10px;">
              <div class="col-sm-3">
                <img src="{{$article->urlToImage}}" width="200">
              </div>
              <div class="col-sm-9">
                <h3>{{$article->title}}</h3>
                <p>{{$article->description}}</p>
                <p>Source: {{$article->source->name}}</p>
                <p>Published At: {{$article->publishedAt}}</p>
              </div>
          </div>
        @endforeach
    </div>
    <script type="text/javascript">
      $(function() {
        $("#dark_mode_btn").on("click", function() {
          $("body").toggleClass('dark_mode')
        })
      })
    </script>
</body>
</html>