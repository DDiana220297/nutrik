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

/* @Customer/recipes.html.twig */
class __TwigTemplate_dd83441250aad273f9d83fd0daf663af6003d2bc2a554cf1d03599b4417ff812 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Customer/recipes.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    <!DOCTYPE HTML>
    <html lang=\"es\">
    <header>
        <!-- Login Page stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/customerpages.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Customer/recipes.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"customer-header\">
        ";
        // line 12
        $this->loadTemplate("customerheader.html.twig", "@Customer/recipes.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
    <section id=\"recipes\">
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <nav class=\"navbar navbar-light bg-light\">
                    <div class=\"container-fluid\">
                        <form class=\"d-flex recipes-finder\">
                            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
                        </form>
                    </div>
                </nav>
                <div class=\"container-fluid\">
                    <div id=\"recipes-content\">
                        <div class=\"col-sm-7\">
                            <div id=\"recipe-content\">
                                <div id=\"recipe-title\">
                                </div>
                                <div id=\"recipe-nutritional-info\">
                                </div>
                                <div id=\"recipe-images\">
                                </div>
                                <div id=\"recipe-steps\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-5\">
                            <div id=\"recipe-content\">
                                <div id=\"recipe-ingredients\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Customer/recipes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!DOCTYPE HTML>
    <html lang=\"es\">
    <header>
        <!-- Login Page stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/customerpages.css') }}\" />
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"customer-header\">
        {% include 'customerheader.html.twig' %}
    </section>
    <section id=\"recipes\">
        <div class=\"container\">
            <div class=\"col-sm-12\">
                <nav class=\"navbar navbar-light bg-light\">
                    <div class=\"container-fluid\">
                        <form class=\"d-flex recipes-finder\">
                            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
                        </form>
                    </div>
                </nav>
                <div class=\"container-fluid\">
                    <div id=\"recipes-content\">
                        <div class=\"col-sm-7\">
                            <div id=\"recipe-content\">
                                <div id=\"recipe-title\">
                                </div>
                                <div id=\"recipe-nutritional-info\">
                                </div>
                                <div id=\"recipe-images\">
                                </div>
                                <div id=\"recipe-steps\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-5\">
                            <div id=\"recipe-content\">
                                <div id=\"recipe-ingredients\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Customer/recipes.html.twig", "/shared/httpd/nutrik/src/CustomerBundle/Resources/views/recipes.html.twig");
    }
}
