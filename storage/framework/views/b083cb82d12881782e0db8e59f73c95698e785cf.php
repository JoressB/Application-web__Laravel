<!-- TABLEAU DE BORD affiché une fois que l'utilisateur est connecté -->



<?php $__env->startSection('title', 'Tableau de bord'); ?>

<?php $__env->startSection('header'); ?>
    ##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('NavBarPlus'); ?>
    <div class="container-fluid white">
        <nav class="navbar-expand-lg navbar-light white">
            <div class="collapse justify-content-center navbar-collapse" id="navbarNav0">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Notifications <span
                                class="badge badge-light">4</span></a></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Tableau de bord</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Annonces <span
                                class="badge badge-light">10</span></a></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link disabled" href="#">Mes infos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link disabled" href="#">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        Tableau de bord
                    </div>

                    <div class="card-body d-flex flex-column">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                            <ul class="list-group mx-auto list-group-flush">
                                <a href="<?php echo e(url('publications')); ?>"><li class="list-group-item mx-auto"><button type="button" class="btn btn-secondary">Voir les annonces publiées</button></li></a>
                                <li class="list-group-item mx-auto"><button type="button" class="btn btn-secondary">Publier une annonce</button></li>
                                <li class="list-group-item mx-auto"><button type="button" class="btn btn-secondary">Modifier mes informations</button></li>
                                <li class="list-group-item mx-auto"><button type="button" class="btn btn-secondary">Voir mes notifications</button></li>
                                <li class="list-group-item mx-auto"><button type="button" class="btn btn-danger">Supprimer une annonce</button></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BabillardTest\resources\views/home.blade.php ENDPATH**/ ?>