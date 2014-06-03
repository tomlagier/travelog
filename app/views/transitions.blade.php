@extends('layouts.main')

@section('title')
Fancybox Transitions Demo
@stop

@section('page-styles')
    <link rel="stylesheet" href="/css/jquery.fancybox-transitions.css?v=0.1" type="text/css" media="screen" />
@stop

@section('page-scripts')
    <script src="/js/jquery.fancybox-transitions.js?v=0.1"></script>
    <script src="/js/fancybox-transitions-demo.js?v=0.1"></script>
@stop

@section('page-content')
<h1>Fancybox transitions</h1>
This is a brief demo of my fancybox transitions extension. All transitions are CSS3, forked from <a href="http://tympanus.net/Development/ModalWindowEffects/" target="_blank">Nifty Modal Window Effects</a>. You can get FancyBox 2 <a href="http://fancyapps.com/fancybox/" target="_blank">over here.</a> Download the transitions plugin from <a href="" target="_blank">GitHub</a>.
<h2>Usage</h2>
<code>
<!-- Add jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/js/jquery.fancybox.pack.js?v=2.1.5"></script>

<!--Add Fancybox transitions -->
<link rel="stylesheet" href="/css/jquery.fancybox-transitions.css?v=0.1" type="text/css" media="screen" />
<script src="/js/jquery.fancybox-transitions.js?v=0.1"></script>
</code>

<h2>Examples</h2>
<h3>Drop in</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'dropIn',
        closeMethod: 'dropOut'
    });
</code>
<div class="effect-0 effect-area">
    <a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
        <img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
    </a>
    <a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
        <img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
    </a>
    <a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
        <img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
    </a>
    <a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
        <img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
    </a>
</div>

<h3>Fade in and scale up</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'fadescaleIn',
        closeMethod: 'fadescaleOut'
    });
</code>
<div class="effect-1 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Slide from the right</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'sliderightIn',
        closeMethod: 'sliderightOut'
    });
</code>
<div class="effect-2 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Slide from the bottom</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'slidebottomIn',
        closeMethod: 'slidebottomOut'
    });
</code>
<div class="effect-3 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Newspaper (twirl in)</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'newspaperIn',
        closeMethod: 'newspaperOut'
    });
</code>
<div class="effect-4 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Fall</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'fallIn',
        closeMethod: 'fallOut'
    });
</code>
<div class="effect-5 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Fall from the side</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'sidefallIn',
        closeMethod: 'sidefallOut'
    });
</code>
<div class="effect-6 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Slide from top</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'stickyupIn',
        closeMethod: 'stickyupOut'
    });
</code>
<div class="effect-7 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Horizontal 3D flip</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'horizontalflipIn',
        closeMethod: 'horizontalflipOut'
    });
</code>
<div class="effect-8 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Vertical 3D flip</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'verticalflipIn',
        closeMethod: 'verticalflipOut'
    });
</code>
<div class="effect-9 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>3D sign</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'signIn',
        closeMethod: 'signOut'
    });
</code>
<div class="effect-10 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Super scaled</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'superscaledIn',
        closeMethod: 'superscaledOut'
    });
</code>
<div class="effect-11 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>3D slit</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'slitIn',
        closeMethod: 'slitOut'
    });
</code>
<div class="effect-12 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>3D rotate from bottom</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'rotatebottomIn',
        closeMethod: 'rotatebottomOut'
    });
</code>
<div class="effect-13 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>3D rotate from left</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'rotateleftIn',
        closeMethod: 'rotateleftOut'
    });
</code>
<div class="effect-14 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<h3>Blur</h3>
<code>
    $('.fancybox').fancybox({
        openMethod: 'blurIn',
        closeMethod: 'blurOut'
    });
</code>
<div class="effect-15 effect-area">
<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
	<img src="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
	<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
	<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
	<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
</a>
</div>

<style>
    .fancybox{
        display: none;
    }

    .fancybox:first-child{
        display: inline-block;
    }
</style>
@stop