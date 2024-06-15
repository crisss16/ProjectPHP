<?php  require 'conect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqk1TR+vZUAnRZ5R12Pb6bgtGndmW9y5a1yxCf+lOJrG5R5pdiPI" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script> <!-- Adăugare Isotope.js -->
</head>
</head>
<body>
     
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">PathoMed</a>
        <div id="burger" class="burger">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                <path d="M4 2v2H2V2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1M9 2v2H7V2zm5 0v2h-2V2zM4 7v2H2V7zm5 0v2H7V7zm5 0h-2v2h2zM4 12v2H2v-2zm5 0v2H7v-2zm5 0v2h-2v-2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1z"/>
              </svg>
        </div>
        <div id="menuHidded" class="menuHidded">
            <div><a class="nav-link" href="#">Home</a></div>
            <div><a class="nav-link" href="#">About</a></div>
            <div><a class="nav-link" href="#">Contact</a></div>
        </div>
     </div>
  </nav>
   
 <header class="page-header header container-fluid">
    <div class="overlay d-flex justify-content-center align-items-center">
        <div class="descriere text-center">
            <h1>Welcome to our page!</h1>
            <p></p>
        </div>
    </div>
 </header>

 <!-- Butoane -->

 <section id="portfolio" class="portfolio">
    <div class="container"> 
        <div class="section-title"> 
            <p></p>
        </div>

        <div class="portfolio-filters">
            <button class="filter-button" data-filter="all" >Toate</button>
            <button class="filter-button" data-filter="citologie">Citologie</button>
            <button class="filter-button" data-filter="molecular">Molecular</button>
            <button class="filter-button" data-filter="biopsii">Biopsii</button>
        </div>
    </div>

    <div class="portfolio-container row">
        <?php
      
        $sql = 'SELECT * FROM portfolio_items';
        $result = mysqli_query($cnx, $sql);
       
        
$data = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

$jsonData = json_encode($data);
      ?>

       
        <div class="card mx-auto" style="width: 18rem;">
  <img src= <?php echo $row['image_path']?> class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">  <?php echo $row['title']?></h5>
    <p class="card-text">  <?php echo $row['description']?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>

    <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-molecular">
        <div class="portfolio-wrap">
            <img src="imagini/hpv1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>HPV</h4>
                <p>Self-collection HPV test</p>
                <div class="portoflio-links">
                    <a href="imagini/hpv1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="surepath"><i class="bx bx-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-biopsii">
        <div class="portfolio-wrap">
            <img src="imagini/biopsii.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Biopsie</h4>
                <p>Biopsie</p>
                <div class="portoflio-links">
                    <a href="imagini/biopsii.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="surepath"><i class="bx bx-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-citologie">
        <div class="portfolio-wrap">
            <img src="imagini/thinprep.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Cito</h4>
                <p>Thinprep</p>
                <div class="portoflio-links">
                    <a href="imagini/thinprep.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="surepath"><i class="bx bx-plus"></i></a>
                </div>
            </div>
        </div>
    </div> -->
 </section>

 <footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h6 class="text-uppercase font-weight-bold">Additional info</h6>
                <p></p>
                <p></p>
            </div>
            <div class="col-md-4">
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <p></p>
                <br/>
                <br/>
            </div>
        </div>
        <div class="footer-copyright text-center">© 2023 Copyright: decidfr.utcluj.ro</div>
    </div>
 </footer>

<!-- JS Script -->

  <script src="js/script.js"></script>
 <script>
     document.getElementById('burger').addEventListener('click', function() {
        document.getElementById('menuHidded').classList.toggle('active');
     })

     document.addEventListener('DOMContentLoaded', function() {
        // Isotope initialization
        var iso = new Isotope('.portfolio-container', {
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });
    

        //Filter items on button click
        var filtersElem = document.querySelector('.portfolio-filters');
        filtersElem.addEventListener('click', function(event) {
            if (!event.target.matches('button')) {
                return;
            }
            var filterValue = event.target.getAttribute('data-filter');
            iso.arrange({ filter: filterValue });
        });

        //change is-checked class on buttons
        var buttonGroups = document.querySelectorAll('.portfolio-filters');
        for (var i=0, len = buttonGroups.length; i < len; i++) {
            var buttonGroup = buttonGroups[i];
            buttonGroup.addEventListener('click', function(event) {
                if (!event.target.matches('button')) {
                return;
            }
            var buttons = buttonGroup.querySelectorAll('.filter-button');
            for (var j=0, btnsLen = buttons.length; j < btnsLen; j++) {
                buttons[j].classList.remove('is-checked');
            }
            event.target.classList.add('is-checked');
        });
    }
});

        // const filterButtons=document.querySelectorAll('.filter-button');
        // const portfolioItems=document.querySelectorAll('.portfolio-item');

        // filterButtons.forEach(button => {
        //     button.addEventListener('click', () => {
        //         const filter = button.getAttribute('data-filter');

        //         portfolioItems.forEach(item => {
        //             if (filter === 'all') {
        //                 item.classList.add('show');
        //             } else {
        //                 if(item.classList.contains('filter-${filter}')) {
        //                     item.classList.add('show');
        //                 } else {
        //                     item.classList.remove('show');
        //                 }
        //             }
        //         });
        //     }) ;
        // });

        //Show all items by default
        document.querySelector('[data-filter="all"]').click();
        var portfolioItems = <?php echo $jsonData; ?>;
        
        // Afișăm datele în consola browser-ului
        console.log(portfolioItems);
 </script>
</body>
</html>