<?php

/* EspritPIDEVBundle:interface:account.html.twig */
class __TwigTemplate_009b1e69c9708da4de5e5a3404ba40d52ff9a0171d46422bafa7aeb115935e36 extends Twig_Template
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
\t\t<title>Account</title>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/css/form.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/css/style.css"), "html", null, true);
        echo "\">
\t\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery-migrate-1.2.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/script.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/TMForm.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritpidev/js/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
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
        // line 45
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_homepage");
        echo "\">HOME</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_hottours");
        echo "\">HOT TOURS</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_specialoffers");
        echo "\">SPECIAL OFFERS</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_blog");
        echo "\">BLOG</a></li>
\t\t\t\t\t\t\t\t<li class=\"current\"><a href=\"\">ACCOUNT</a>
                                                                     <ul>
                                                                              <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_account");
        echo "\">Profil</a></li>
                                                                              <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_hottours");
        echo "\">My offres</a></li>
                                                                              <li><a href=\"";
        // line 53
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
        // line 64
        echo $this->env->getExtension('routing')->getPath("esprit_pidev_homepage");
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 65
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
\t\t\t\t<div class=\"grid_5\">
\t\t\t\t\t<h3>CONTACT INFO</h3>
\t\t\t\t\t<div class=\"map\">
\t\t\t\t\t\t<p>TemplateMonster provides 24/7 support for all its <span class=\"col1\"><a href=\"http://www.templatemonster.com/website-templates.php\" rel=\"nofollow\">premium products</a></span>. Freebies go without it.</p>
\t\t\t\t\t\t<p>If you have any questions regarding the customization of the chosen free theme, ask <span class=\"col1\"><a href=\"http://www.templatetuning.com/\" rel=\"nofollow\">TemplateTuning</a></span> to help you on a paid basis.</p>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t<figure class=\"\">
\t\t\t\t\t\t\t<iframe src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>The Company Name Inc. <br>
\t\t\t\t\t\t\t\t\t8901 Marmora Road,<br>
\t\t\t\t\t\t\t\t\tGlasgow, D04 89GR.
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd><span>Freephone:</span>+1 800 559 6580</dd>
\t\t\t\t\t\t\t\t<dd><span>Telephone:</span>+1 800 603 6035</dd>
\t\t\t\t\t\t\t\t<dd><span>FAX:</span>+1 800 889 9898</dd>
\t\t\t\t\t\t\t\t<dd>E-mail: <a href=\"#\" class=\"col1\">mail@demolink.org</a></dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</address>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_6 prefix_1\">
\t\t\t\t\t<h3>Sign UP</h3>
\t\t\t\t\t<form id=\"form\">
\t\t\t\t\t\t<div class=\"success_wrapper\">
\t\t\t\t\t\t\t<div class=\"success-message\">Contact form submitted</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label class=\"name\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Name:\" data-constraints=\"@Required @JustLetters\" />
\t\t\t\t\t\t\t<span class=\"empty-message\">*This field is required.</span>
\t\t\t\t\t\t\t<span class=\"error-message\">*This is not a valid name.</span>
\t\t\t\t\t\t</label>
                                                <label class=\"lastname\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Last name:\" data-constraints=\"@Required @JustLetters\" />
\t\t\t\t\t\t\t<span class=\"empty-message\">*This field is required.</span>
\t\t\t\t\t\t\t<span class=\"error-message\">*This is not a valid name.</span>
\t\t\t\t\t\t</label>
                                                <label class=\"age\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Age:\" data-constraints=\"@Required @JustNumeric\" />
\t\t\t\t\t\t\t<span class=\"empty-message\">*This field is required.</span>
\t\t\t\t\t\t\t<span class=\"error-message\">*This is not a valid number.</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"email\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Email:\" data-constraints=\"@Required @Email\" />
\t\t\t\t\t\t\t<span class=\"empty-message\">*This field is required.</span>
\t\t\t\t\t\t\t<span class=\"error-message\">*This is not a valid email.</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"country\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Country:\" data-constraints=\"@Required @JustLetters\"/>
\t\t\t\t\t\t\t<span class=\"empty-message\">*This field is required.</span>
\t\t\t\t\t\t\t<span class=\"error-message\">*This is not a valid phone.</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"message\">
\t\t\t\t\t\t\t<textarea placeholder=\"About me:\" data-constraints='@Required @Length(min=10,max=999999)'></textarea>
\t\t\t\t\t\t\t<span class=\"empty-message\">*This field is required.</span>
\t\t\t\t\t\t\t<span class=\"error-message\">*The message is too short.</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t<div class=\"btns\">
\t\t\t\t\t\t\t\t<a href=\"#\" data-type=\"reset\" class=\"btn\">Clear</a>
\t\t\t\t\t\t\t\t<a href=\"#\" data-type=\"submit\" class=\"btn\">Submit</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
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
        return "EspritPIDEVBundle:interface:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  144 => 64,  130 => 53,  126 => 52,  122 => 51,  116 => 48,  112 => 47,  108 => 46,  104 => 45,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
