<?php

/* EspritPIDEVBundle:interface:blog.html.twig */
class __TwigTemplate_6486a3dd75168f628106f50b049bfc76bdb856bfe849321503fa3a2c0acd7427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<title>Blog</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"format-detection\" content=\"telephone=no\" />
\t\t<link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/images/favicon.ico"), "html", null, true);
        echo "\">
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/images/favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/css/style.css"), "html", null, true);
        echo "\">
\t\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery-migrate-1.2.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/script.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\$(document).ready(function(){
\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t\t});
\t\t</script>
\t\t<!--[if lt IE 8]>
\t\t<div style=' clear: both; text-align:center; position: relative;'>
\t\t\t<a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
\t\t\t\t<img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
\t\t\t</a>
\t\t</div>
\t\t<![endif]-->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.js\"></script>
\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"css/ie.css\">
\t\t<![endif]-->
\t</head>
\t<body>
<!--==============================header=================================-->
\t\t<header>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t<div class=\"menu_block\">
\t\t\t\t\t\t<nav class=\"horizontal-nav full-width horizontalNav-notprocessed\">
\t\t\t\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_homepage");
        echo "\">HOME</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_hottours");
        echo "\">HOT TOURS</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_specialoffers");
        echo "\">SPECIAL OFFERS</a></li>
\t\t\t\t\t\t\t\t<li class=\"current\"><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_blog");
        echo "\">BLOG</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">ACCOUNT</a>
                                                                     <ul>
                                                                              <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_account");
        echo "\">Profil</a></li>
                                                                              <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_hottours");
        echo "\">My offres</a></li>
                                                                              <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_blog");
        echo "\">Experiences</a></li>
                                                                            </ul>
                                                                </li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t<a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_homepage");
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/images/logo.png"), "html", null, true);
        echo "\" alt=\"Your Happy Family\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
<!--==============================Content=================================-->
\t\t<div class=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_7\">
\t\t\t\t\t<h3>Recent Posts</h3>
\t\t\t\t\t<div class=\"blog\">
\t\t\t\t\t\t<time datetime=\"2014-10-01\">15<span>Feb</span></time>
\t\t\t\t\t\t<div class=\"extra_wrapper\">
\t\t\t\t\t\t\t<div class=\"text1 col1\"><a href=\"#\">Had the best days in London !!</a></div>Posted by
\t\t\t\t\t\t\t<a href=\"#\">Amir</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/images/page4_img1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img_inner\">
\t\t\t\t\t\t<p>I visited London on february 15 and it was awesome, I have made many new friends and it was a pleasure being here !
                                                    I give this place a 5 stars !
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a href=\"#\" class=\"link1\">LEARN MORE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"blog\">
\t\t\t\t\t\t<time datetime=\"2014-10-01\">17<span>Feb</span></time>
\t\t\t\t\t\t<div class=\"extra_wrapper\">
\t\t\t\t\t\t\t<div class=\"text1 col1\"><a href=\"#\">#Heaven on earth</a></div>Posted by
\t\t\t\t\t\t\t<a href=\"#\">Sawsen</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t<img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/images/page4_img2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img_inner\">
\t\t\t\t\t\t<p>This place made me feel so fresh and energetic, the beach, the sun, the waves.. everything here makes me happy! I really recommend it.
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a href=\"#\" class=\"link1\">LEARN MORE</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_3 prefix_1\">
\t\t\t\t\t<h3 class=\"head1\">CATEGORIES</h3>
\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t<li><a href=\"#\">Summer vacation </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Innovative and willing </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Near the beach </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Business planning </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Desert </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Open spaces </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Cruise </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Adventures </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Exploring </a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<h3 class=\"head1\">Archives</h3>
\t\t\t\t\t<ul class=\"list\">
                                                <li><a href=\"#\">February 2016</a></li>
\t\t\t\t\t\t<li><a href=\"#\">January 2016</a></li>
\t\t\t\t\t\t<li><a href=\"#\">December 2015</a></li>
\t\t\t\t\t\t<li><a href=\"#\">November 2015</a></li>
\t\t\t\t\t\t<li><a href=\"#\">October 2015</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<!--==============================footer=================================-->
\t\t<footer>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-google-plus\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\tYour Trip (c) 2014 | <a href=\"#\">Privacy Policy</a> | Website Template Designed by <a href=\"http://www.templatemonster.com/\" rel=\"nofollow\">TemplateMonster.com</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<script>
\t\t\$(function (){
\t\t\t\$('#bookingForm').bookingForm({
\t\t\t\townerEmail: '#'
\t\t\t});
\t\t})
\t\t</script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "EspritPIDEVBundle:interface:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 93,  160 => 80,  139 => 62,  135 => 61,  122 => 51,  118 => 50,  114 => 49,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
