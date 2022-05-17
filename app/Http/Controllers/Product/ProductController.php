<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;



class ProductController extends Controller
{

    public static function get_xml()
    {
        $xml = simplexml_load_file('https://sklep.rywal.com.pl/xml?id=22&hash=f6c3dc3fdfe63eec68c168b6cfeaaddff9766916b1f9968b7bd73a4c4a970267');
        return $xml;
    }

    public function getProductsMegaDiscount()
    {
        $products = self::get_xml();
        return view('product.megadiscount', compact('products'));
    }

    public function getProductsDiscount()
    {
        $products = self::get_xml();
        return view('product.discount', compact('products'));
    }

    public function getProductsBestRated()
    {
        $products = self::get_xml();
        return view('product.productswithflag.bestrated', compact('products'));
    }

    public function getProductsGreatPrice()
    {
        $products = self::get_xml();
        return view('product.productswithflag.greatprice', compact('products'));
    }

    public function getProductsGreatQuality()
    {
        $products = self::get_xml();
        return view('product.productswithflag.greatquality', compact('products'));
    }

    public function getProductsNewProduct()
    {
        $products = self::get_xml();
        return view('product.productswithflag.newproduct', compact('products'));
    }

    public function getProductsPromotion()
    {
        $products = self::get_xml();
        return view('product.productswithflag.promotion', compact('products'));
    }

    public function getProductsPromotionalProduct()
    {
        $products = self::get_xml();
        return view('product.productswithflag.promotionalproduct', compact('products'));
    }

    public function getProductsRecommendedProduct()
    {
        $products = self::get_xml();
        return view('product.productswithflag.recommendedproduct', compact('products'));
    }

    public function getProductsSale()
    {
        $products = self::get_xml();
        return view('product.productswithflag.sale', compact('products'));
    }

    public function getProductsVendorRecomendation()
    {
        $products = self::get_xml();
        return view('product.productswithflag.vendorrecomendation', compact('products'));
    }

    public function getProductsZero()
    {
        $products = self::get_xml();
        return view('product.productszero', compact('products'));
    }
}
