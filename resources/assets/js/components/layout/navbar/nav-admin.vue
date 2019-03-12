<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary font-weight-bold">
           <a class="navbar-brand " href="/">
                <img style="width:100px" src="/storage/images/app/logo.png" alt="Bazar Mayorista Maju">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="/">Cotizador <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="/admin">Administrar Productos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="/admin/pedidos">Pedidos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="/admin/metadata">Metadata</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="/logout">Salir</a>
                    </li>
                </ul>
            </div>
        </nav>
</template>

<style lang="scss">
    .text-white{
        color:#fff;
       
    }
</style>