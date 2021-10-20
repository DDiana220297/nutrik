<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* carousel.html.twig */
class __TwigTemplate_e82600ad69d66975bf32b69ac68a054b0a6b20bf1f67dc2f210cc398155c95d9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carousel.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\"/>

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\">

    <!-- Login Page stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/loginpage.css"), "html", null, true);
        echo "\" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Menu component javascript -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/MenuComponent.js"), "html", null, true);
        echo "\"></script>

    <!-- Customs JS -->
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework//js/customs.js"), "html", null, true);
        echo "\"></script>

</head>
<body>
    <section id=\"carousel-login-page-section\">
        <div class=\"container\">
            <div id=\"carouselLoginPage\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselLoginPage\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselLoginPage\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselLoginPage\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carouselLoginPage\" data-slide-to=\"3\"></li>
                </ol>

                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img2.jpeg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img4.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carouselLoginPage\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"right carousel-control\" href=\"#carouselLoginPage\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
    </section>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 63,  113 => 55,  102 => 47,  91 => 39,  72 => 23,  66 => 20,  60 => 17,  51 => 11,  45 => 8,  41 => 7,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\"/>

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap-theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.css') }}\">

    <!-- Login Page stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/loginpage.css') }}\" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"{{ asset('public/js/bootstrap.js') }}\"></script>

    <!-- Menu component javascript -->
    <script src=\"{{ asset('bundles/framework/js/MenuComponent.js') }}\"></script>

    <!-- Customs JS -->
    <script src=\"{{ asset('bundles/framework//js/customs.js') }}\"></script>

</head>
<body>
    <section id=\"carousel-login-page-section\">
        <div class=\"container\">
            <div id=\"carouselLoginPage\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselLoginPage\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselLoginPage\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselLoginPage\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carouselLoginPage\" data-slide-to=\"3\"></li>
                </ol>

                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img src=\"{{ asset('img1.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"{{ asset('img2.jpeg') }}\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"{{ asset('img3.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        <img src=\"{{ asset('img4.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption\">
                            <h4>Bootstrap caption example</h4>
                            <p>Bootstrap 3.4.1 is not so old, but you can use Bootstrap 4 already.</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carouselLoginPage\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>

                <a class=\"right carousel-control\" href=\"#carouselLoginPage\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
    </section>
</body>
", "carousel.html.twig", "/shared/httpd/nutrik/app/Resources/views/carousel.html.twig");
    }
}