<template>
         <nav class="navbar navbar-expand-lg navbar-dark font-weight-bold">
                <a class="navbar-brand " href="/">
                    <img style="width:60px" src="/storage/images/app/logo.png" alt="Bazar Mayorista Maju">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item text-white">
                            <a class="nav-link text-white" href="/">
                            <span class="fa fa-shopping-cart"></span>  Home <span class="sr-only">(current)</span>
                            </a>
                        </li>
                       
                      
                        <li class="nav-item text-white">
                            <a class="nav-link text-white" target="_blank" rel="noreferrer"
                                href="https://goo.gl/maps/41ThzXr52pF2">
                                <span class="fas fa-home"></span> ¿Donde esta nuestro local?
                            </a> 
                        </li>
                    </ul>
                </div>
            </nav>
</template>

<style lang="scss" scoped>

    .navbar{
        background-color: blue;
        padding:  0 3%;
        margin: 0 -9%;
    }

    .text-white{
        color:#fff;
       
    }

    .fa-bars{
        font-size:2rem;
        color:#fff;
    }

    @media(max-width:600px){
        .navbar{
            margin:0 -3%;

            
        }
    }
</style>