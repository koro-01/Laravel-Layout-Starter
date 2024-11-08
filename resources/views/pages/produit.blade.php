@extends('layouts.default')
@section('content')
    <h1>Ici c'est la page Produit</h1>
    <div class="col-sm-12 col-md-10 col-md-offset-1">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantité</th>
                    <th class="text-center">Prix</th>
                    <th class="text-center">Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"><img class="media-object" src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"></a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Nom du produit</a></h4>
                                <h5 class="media-heading">Par <a href="#">Nom de marque</a></h5>
                                <span>Statut:</span><span class="text-success"><strong>en stock</strong></span>
                            </div>
                        </div>
                    </td>
                    <td class="col-sm-1 col-md-1" style="text-align: center"><input type="email" class="form-control" value="3"></td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                    <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"><img class="media-object" src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"></a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Nom du produit</a></h4>
                                <h5 class="media-heading">Par <a href="#">Nom de marque</a></h5>
                                <span>Statut:</span><span class="text-warning"><strong>Quitte l'entrepôt dans 2 à 3 semaines</strong></span>
                            </div>
                        </div>
                    </td>
                    <td class="col-md-1" style="text-align: center"><input type="email" class="form-control" value="2"></td>
                    <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                    <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                    <td class="col-md-1">
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><h5>Sous total</h5></td>
                    <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                   
