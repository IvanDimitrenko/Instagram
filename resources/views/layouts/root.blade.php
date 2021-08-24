<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link id="MainIcon" rel="icon"> -->
    <!-- <script src="http://localhost:8098"></script> -->
    <title>Instagram</title>

    <link href="/css/base/base.css" rel="stylesheet">
    <link href="/css/base/resete.css" rel="stylesheet">

    <link href="/css/layout/layout.css" rel="stylesheet">
    <link href="/css/module/module.css" rel="stylesheet">
    <link href="/css/state/state.css" rel="stylesheet">

    <link href="/css/other/style.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    @yield("header")
</head>

<body>
    <div id="app">
        @yield("content")       
    </div>

    <!-- <script type="text/javascript">
        (function main(){
            var Logo = document.getElementsByClassName("logo")[0];
            if(Logo){
                Logo.addEventListener('click', e => {
                   
                })
            }
        })();
    </script> -->
    <!-- <script src="/js/app.js"></script> -->

</body>

</html>