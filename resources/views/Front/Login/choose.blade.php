<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

 
     <div class="container">
          <div class="row">
              
               <div class="col col-lg-4  " style="margin-top:150px; ">
                    <div class="card" style="width:400px">
                         <img class="card-img-top" src="https://vistapointe.net/images/company-4.jpg" alt="Card image">
                         <div class="card-body">
                           <h4 class="card-title">John Doe</h4>
                           <p class="card-text">Some example text.</p>
                           <a href="{{ URL('Register_Compony') }}" class="btn btn-primary">See Profile</a>
                         </div>
                       </div>
               </div>
               <div class="col col-lg-4 " style="margin-top:150px; ">
                    <div class="card" style="width:400px">
                         <img class="card-img-top" src="https://avatars.mds.yandex.net/i?id=4d1e3b8ce106a286998868c515916fcd10d6f524-5233728-images-thumbs&n=13" alt="Card image">
                         <div class="card-body">
                           <h4 class="card-title">John Doe</h4>
                           <p class="card-text">Some example text.</p>
                           <a href="{{ URL('Jop_Search') }}" class="btn btn-primary">See Profile</a>
                         </div>
                       </div>
               </div>
          </div>
     </div>
     </div>
  
 

</body>
</html>
