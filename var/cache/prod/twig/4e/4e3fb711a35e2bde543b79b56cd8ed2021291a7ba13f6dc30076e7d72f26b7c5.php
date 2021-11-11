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

/* @Nutritionist/nutritionist-config.html.twig */
class __TwigTemplate_c0946575b213ed7c4e108932b588f17b326291e9538c6f9f6569eb9948cf71fb extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nutritionist/nutritionist-config.html.twig"));

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
        <!-- Login Page stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/nutritionistpages.css"), "html", null, true);
        echo "\" />
    </header>
    <section id=\"default-header\">
        ";
        // line 9
        $this->loadTemplate("header.html.twig", "@Nutritionist/nutritionist-config.html.twig", 9)->display($context);
        // line 10
        echo "    </section>
    <section id=\"nutritionist-configuration-section\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "configKOStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"row\" style=\"width: 84%; margin-left: 8%; margin-top: 10px; margin-bottom: -30px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", [], "method"), "get", [0 => "configOKStatus"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"row\" style=\"width: 84%; margin-left: 8%; margin-top: 10px; margin-bottom: -30px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <div class=\"container\">
            <div class=\"col-sm-12 configuration-block\">
                <form class=\"form\" action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
        echo "\" method=\"post\">
                    <div class=\"col-sm-5 nutritionist-presentation-page\">
                        <div class=\"col-sm-12\"><h3 style=\"text-align: center\"><strong style=\"color: #00766c\">Configura tu página de presentación</strong></h3></div>
                        <div class=\"col-sm-12 nutritionist-presentation\" style=\"margin-top: 15px\">
                            <label for=\"presentacion\">Presentación:</label>
                            <textarea type=\"text\" id=\"presentacion\" name=\"presentacion\" class=\"form-control\" >";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "presentation", []), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"col-sm-12 nutritionist-bibliography\" style=\"margin-top: 15px\">
                            <label for=\"bibliografia\">Descripción / Bibliografía:</label>
                            <textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" >";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "description", []), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"col-sm-12 nutritionist-rate\" style=\"margin-top: 15px\">
                            <label for=\"rate\">Tarifa
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 17px; height: 17px; margin-bottom: -3px\"
                                     onclick=\"openModal('openMyInfoRateModal')\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                </svg>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoRateModal\" data-toggle=\"modal\" data-target=\"#infoRateModal\"></button>
                                <div class=\"modal fade\" id=\"infoRateModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\" style=\"height: 28rem;width: 50rem;padding: 40px 30px;\">
                                            <!-- Modal body -->
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-piggy-bank\" viewBox=\"0 0 16 16\" style=\"width: 4rem; height: 4rem\">
                                                <path d=\"M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z\"/>
                                            </svg>
                                            <p>
                                                Esta es la tarifa que aparecera en tu ficha de presentacion para los clientes de NutriK.
                                                <hr/>
                                                Puedes indicar un importe fijo, un rango de precios o tal vez te interesa verlo en una primera consulta, por ejemplo, \"Precio a consultar\"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <input type=\"text\" id=\"rate\" name=\"rate\" class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "rate", []), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-sm-12 nutritionist-social-media\" style=\"margin-top: 15px\">
                            <label>Redes sociales:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">NutriK</div>
                                <div class=\"input-group-addon input-prefix\">https://nutrik.test/web/presentation/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"nutrik_media\" placeholder=\"\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "idUser", []), "html", null, true);
        echo "\" disabled>
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Facebook</div>
                                <div class=\"input-group-addon input-prefix\">https://facebook.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"facebook_media\"  name=\"facebook_media\" placeholder=\"\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["facebook_media"] ?? $this->getContext($context, "facebook_media")), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Instagram</div>
                                <div class=\"input-group-addon input-prefix\">https://instagram.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"instagram_media\" name=\"instagram_media\" placeholder=\"\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["instagram_media"] ?? $this->getContext($context, "instagram_media")), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Linkedin</div>
                                <div class=\"input-group-addon input-prefix\">https://www.linkedin.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"linkedin_media\" name=\"linkedin_media\" placeholder=\"\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["linkedin_media"] ?? $this->getContext($context, "linkedin_media")), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-sm-12 save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar Presentacion\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-5 nutritionist-tools\">
                        <div class=\"col-sm-12\"><h3 style=\"text-align: center\"><strong style=\"color: #00766c\">Configura tu área de trabajo</strong></h3></div>
                        <div class=\"tools\">
                            <label style=\"float: left; padding-left: 15px\">Tags:
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 17px; height: 17px; margin-bottom: -3px\"
                                     onclick=\"openModal('openMyInfoTagsModal')\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                </svg>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoTagsModal\" data-toggle=\"modal\" data-target=\"#infoTagsModal\"></button>
                                <div class=\"modal fade\" id=\"infoTagsModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                            <!-- Modal body -->
                                            <span>El nivel de una etiqueta esta relacionado con la jerarquía, por ejemplo, el tag <strong>Celíaco</strong> con nivel 3. esta incluido dentro del tag <strong>Intolerancias</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <label class=\"add-tag\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateTagModal')\">Añadir nuevo tag</label>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateTagModal\" data-toggle=\"modal\" data-target=\"#createTagModal\"></button>
                            <div class=\"modal fade\" id=\"createTagModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <form class=\"form\" action=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
        echo "\" method=\"post\">
                                            <h4 style=\"text-align: center; color: #00766c\">Añadir nueva etiqueta</h4>
                                            <hr/>
                                            <label for=\"tag_name\">Nombre:</label><input type=\"text\" id=\"tag_name\" name=\"tag_name\" class=\"form-control\">
                                            <label for=\"tag_description\">Descripción:</label><textarea type=\"text\" id=\"tag_description\" name=\"tag_description\" class=\"form-control\"></textarea>
                                            <label for=\"tag_level\">Nivel:</label><input type=\"number\" id=\"tag_level\" name=\"tag_description\" class=\"form-control\">
                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar etiqueta\"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"col-sm-12 nutritionist-tags\">
                                ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 132
            echo "                                    <div class=\"tag-entry\" style=\"height: 9rem\">
                                        <div class=\"col-sm-11 tag-resume\">
                                            <h4 style=\"color: #00766c\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
            echo "</h4>
                                            <p>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "description", []), "html", null, true);
            echo "</p>
                                            <p><strong>Nivel:</strong>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "level", []), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"col-sm-1 tag-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-25px;width: 2rem;height: 2rem;\"
                                                 onclick=\"openModal('openEditTagModal')\">
                                                <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                            </svg>
                                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditTagModal\" data-toggle=\"modal\" data-target=\"#editTagModal\"></button>
                                            <div class=\"modal fade\" id=\"editTagModal\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                                        <!-- Modal body -->
                                                        <form class=\"form\" action=\"";
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
            echo "\" method=\"post\">
                                                            <h4 style=\"text-align: center; color: #00766c\">Modificar etiqueta</h4>
                                                            <hr/>
                                                            <label for=\"tag_name\">Nombre:</label><input type=\"text\" id=\"tag_name\" name=\"tag_name\" class=\"form-control\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", []), "html", null, true);
            echo "\">
                                                            <label for=\"tag_description\">Descripción:</label><textarea type=\"text\" id=\"tag_description\" name=\"tag_description\" class=\"form-control\">";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "description", []), "html", null, true);
            echo "</textarea>
                                                            <label for=\"tag_level\">Nivel:</label><input type=\"number\" id=\"tag_level\" name=\"tag_description\" class=\"form-control\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "level", []), "html", null, true);
            echo "\">
                                                            <input type=\"hidden\" id=\"id_tag_edit\" name=\"id_tag_edit\" value=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idTag", []), "html", null, true);
            echo "\">
                                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Modificar etiqueta\"/>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                            </div>
                            <hr/>
                            <label style=\"float: left; padding-left: 15px\">Ejercicios:</label>
                            <label class=\"add-exercise\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateExerciseModal')\">Añadir nuevo ejercicio:</label>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateExerciseModal\" data-toggle=\"modal\" data-target=\"#createExerciseModal\"></button>
                            <div class=\"modal fade\" id=\"createExerciseModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <form class=\"form\" action=\"";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
        echo "\" method=\"post\">
                                            <h4 style=\"text-align: center; color: #00766c\">Añadir nuevo ejercicio</h4>
                                            <label for=\"exercise_title\">Nombre:</label><input type=\"text\" id=\"exercise_title\" name=\"exercise_title\" class=\"form-control\">
                                            <label for=\"exercise_description\">Descripción:</label><textarea type=\"text\" id=\"exercise_description\" name=\"exercise_description\" class=\"form-control\"></textarea>
                                            <label for=\"exercise_muscles\">Músculos trabajados:</label><textarea type=\"text\" id=\"exercise_muscles\" name=\"exercise_muscles\" class=\"form-control\"></textarea>
                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar ejercicio\"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"col-sm-12 nutritionist-exercises\">
                                ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercises"] ?? $this->getContext($context, "exercises")));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 185
            echo "                                    <div class=\"exercise-entry\" style=\"height: 9rem\">
                                        <div class=\"col-sm-11 exercise-resume\">
                                            <h4 style=\"color: #00766c\">";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "</h4>
                                            <p>";
            // line 188
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["exercise"], "description", [])) > 100)) ? ((twig_slice($this->env, $this->getAttribute($context["exercise"], "description", []), 0, 100) . "...")) : ($this->getAttribute($context["exercise"], "description", []))), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"col-sm-1 exercise-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-15px;width: 2rem;height: 2rem;\"
                                                 onclick=\"openModal('openEditExerciseModal')\">
                                                <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                            </svg>
                                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditExerciseModal\" data-toggle=\"modal\" data-target=\"#editExerciseModal\"></button>
                                            <div class=\"modal fade\" id=\"editExerciseModal\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                                        <!-- Modal body -->
                                                        <form class=\"form\" action=\"";
            // line 200
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
            echo "\" method=\"post\">
                                                            <h4 style=\"text-align: center; color: #00766c\">Editar ejercicio</h4>
                                                            <label for=\"exercise_title\">Nombre:</label><input type=\"text\" id=\"exercise_title\" name=\"exercise_title\" class=\"form-control\" value=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "title", []), "html", null, true);
            echo "\">
                                                            <label for=\"exercise_description\">Descripción:</label><textarea type=\"text\" id=\"exercise_description\" name=\"exercise_description\" class=\"form-control\">";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "description", []), "html", null, true);
            echo "</textarea>
                                                            <label for=\"exercise_muscles\">Músculos trabajados:</label><textarea type=\"text\" id=\"exercise_muscles\" name=\"exercise_muscles\" class=\"form-control\">";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "muscles", []), "html", null, true);
            echo "</textarea>
                                                            <input type=\"hidden\" id=\"id_exercise_edit\" name=\"id_exercise_edit\" value=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($context["exercise"], "idExercise", []), "html", null, true);
            echo "\">
                                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Modificar ejercicio\"/>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                            </div>
                            <label style=\"float: left; padding-left: 15px\">Categorias:</label>
                            <label class=\"add-category\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateCategoryModal')\">Añadir nueva categoria</label>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateCategoryModal\" data-toggle=\"modal\" data-target=\"#createCategoryModal\"></button>
                            <div class=\"modal fade\" id=\"createCategoryModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <form class=\"form\" action=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
        echo "\" method=\"post\">
                                            <h4 style=\"text-align: center; color: #00766c\">Añadir nueva categoría</h4>
                                            <label for=\"category_name\">Nombre:</label><input type=\"text\" id=\"category_name\" name=\"category_name\" class=\"form-control\">
                                            <label for=\"category_description_short\">Descripción corta:</label><textarea type=\"text\" id=\"category_description_short\" name=\"category_description_short\" class=\"form-control\"></textarea>
                                            <label for=\"category_description\">Descripción larga:</label><textarea type=\"text\" id=\"category_description\" name=\"category_description\" class=\"form-control\"></textarea>
                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar categoria\"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 nutritionist-categories\">
                                ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 234
            echo "                                    <div class=\"category-entry\">
                                        <div class=\"col-sm-11 category-resume\">
                                            <h4 style=\"color: #00766c\">";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
            echo "</h4>
                                            <p>";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "descriptionShort", []), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"col-sm-1 category-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-15px;width: 2rem;height: 2rem;\"
                                                 onclick=\"openModal('openEditCategoryModal')\">
                                                <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                            </svg>
                                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditCategoryModal\" data-toggle=\"modal\" data-target=\"#editCategoryModal\"></button>
                                            <div class=\"modal fade\" id=\"editCategoryModal\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                                        <!-- Modal body -->
                                                        <form class=\"form\" action=\"";
            // line 249
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nutritionist_configuration");
            echo "\" method=\"post\">
                                                            <h4 style=\"text-align: center; color: #00766c\">Editar categoria</h4>
                                                            <label for=\"category_name\">Nombre:</label><input type=\"text\" id=\"category_name\" name=\"category_name\" class=\"form-control\" value=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
            echo "\">
                                                            <label for=\"category_description_short\">Descripción corta:</label><textarea type=\"text\" id=\"category_description_short\" name=\"category_description_short\" class=\"form-control\">";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "descriptionShort", []), "html", null, true);
            echo "</textarea>
                                                            <label for=\"category_description\">Descripción larga:</label><textarea type=\"text\" id=\"category_description\" name=\"category_description\" class=\"form-control\">";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", []), "html", null, true);
            echo "</textarea>
                                                            <input type=\"hidden\" id=\"id_category_edit\" name=\"id_category_edit\" value=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "idCategory", []), "html", null, true);
            echo "\">
                                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Modificar categoria\"/>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Nutritionist/nutritionist-config.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  467 => 263,  452 => 254,  448 => 253,  444 => 252,  440 => 251,  435 => 249,  420 => 237,  416 => 236,  412 => 234,  408 => 233,  394 => 222,  384 => 214,  369 => 205,  365 => 204,  361 => 203,  357 => 202,  352 => 200,  337 => 188,  333 => 187,  329 => 185,  325 => 184,  310 => 172,  299 => 163,  284 => 154,  280 => 153,  276 => 152,  272 => 151,  266 => 148,  251 => 136,  247 => 135,  243 => 134,  239 => 132,  235 => 131,  219 => 118,  184 => 86,  176 => 81,  168 => 76,  160 => 71,  150 => 64,  120 => 37,  113 => 33,  105 => 28,  101 => 26,  91 => 22,  87 => 20,  82 => 19,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  52 => 6,  46 => 2,  34 => 1,);
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
        <!-- Login Page stylesheet -->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/nutritionistpages.css') }}\" />
    </header>
    <section id=\"default-header\">
        {% include 'header.html.twig' %}
    </section>
    <section id=\"nutritionist-configuration-section\">
        {% for message in  app.session.flashbag().get('configKOStatus') %}
            <div class=\"row\" style=\"width: 84%; margin-left: 8%; margin-top: 10px; margin-bottom: -30px;\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        {% for message in  app.session.flashbag().get('configOKStatus') %}
            <div class=\"row\" style=\"width: 84%; margin-left: 8%; margin-top: 10px; margin-bottom: -30px;\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"col-sm-12 configuration-block\">
                <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                    <div class=\"col-sm-5 nutritionist-presentation-page\">
                        <div class=\"col-sm-12\"><h3 style=\"text-align: center\"><strong style=\"color: #00766c\">Configura tu página de presentación</strong></h3></div>
                        <div class=\"col-sm-12 nutritionist-presentation\" style=\"margin-top: 15px\">
                            <label for=\"presentacion\">Presentación:</label>
                            <textarea type=\"text\" id=\"presentacion\" name=\"presentacion\" class=\"form-control\" >{{ app.user.presentation }}</textarea>
                        </div>
                        <div class=\"col-sm-12 nutritionist-bibliography\" style=\"margin-top: 15px\">
                            <label for=\"bibliografia\">Descripción / Bibliografía:</label>
                            <textarea type=\"text\" id=\"bibliografia\" name=\"bibliografia\" class=\"form-control\" >{{ app.user.description }}</textarea>
                        </div>
                        <div class=\"col-sm-12 nutritionist-rate\" style=\"margin-top: 15px\">
                            <label for=\"rate\">Tarifa
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 17px; height: 17px; margin-bottom: -3px\"
                                     onclick=\"openModal('openMyInfoRateModal')\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                </svg>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoRateModal\" data-toggle=\"modal\" data-target=\"#infoRateModal\"></button>
                                <div class=\"modal fade\" id=\"infoRateModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\" style=\"height: 28rem;width: 50rem;padding: 40px 30px;\">
                                            <!-- Modal body -->
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-piggy-bank\" viewBox=\"0 0 16 16\" style=\"width: 4rem; height: 4rem\">
                                                <path d=\"M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z\"/>
                                            </svg>
                                            <p>
                                                Esta es la tarifa que aparecera en tu ficha de presentacion para los clientes de NutriK.
                                                <hr/>
                                                Puedes indicar un importe fijo, un rango de precios o tal vez te interesa verlo en una primera consulta, por ejemplo, \"Precio a consultar\"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <input type=\"text\" id=\"rate\" name=\"rate\" class=\"form-control\" value=\"{{ app.user.rate }}\">
                        </div>
                        <div class=\"col-sm-12 nutritionist-social-media\" style=\"margin-top: 15px\">
                            <label>Redes sociales:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">NutriK</div>
                                <div class=\"input-group-addon input-prefix\">https://nutrik.test/web/presentation/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"nutrik_media\" placeholder=\"\" value=\"{{ app.user.idUser }}\" disabled>
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Facebook</div>
                                <div class=\"input-group-addon input-prefix\">https://facebook.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"facebook_media\"  name=\"facebook_media\" placeholder=\"\" value=\"{{ facebook_media }}\">
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Instagram</div>
                                <div class=\"input-group-addon input-prefix\">https://instagram.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"instagram_media\" name=\"instagram_media\" placeholder=\"\" value=\"{{ instagram_media }}\">
                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon input-label\">Linkedin</div>
                                <div class=\"input-group-addon input-prefix\">https://www.linkedin.com/</div>
                                <input type=\"text\" class=\"form-control input-social-media\" id=\"linkedin_media\" name=\"linkedin_media\" placeholder=\"\" value=\"{{ linkedin_media }}\">
                            </div>
                        </div>
                        <div class=\"col-sm-12 save-button-item\" style=\"width: 100%;\">
                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar Presentacion\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-5 nutritionist-tools\">
                        <div class=\"col-sm-12\"><h3 style=\"text-align: center\"><strong style=\"color: #00766c\">Configura tu área de trabajo</strong></h3></div>
                        <div class=\"tools\">
                            <label style=\"float: left; padding-left: 15px\">Tags:
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\" style=\"width: 17px; height: 17px; margin-bottom: -3px\"
                                     onclick=\"openModal('openMyInfoTagsModal')\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                </svg>
                                <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openMyInfoTagsModal\" data-toggle=\"modal\" data-target=\"#infoTagsModal\"></button>
                                <div class=\"modal fade\" id=\"infoTagsModal\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\" style=\"height: 15rem;width: 50rem;padding: 40px 30px;\">
                                            <!-- Modal body -->
                                            <span>El nivel de una etiqueta esta relacionado con la jerarquía, por ejemplo, el tag <strong>Celíaco</strong> con nivel 3. esta incluido dentro del tag <strong>Intolerancias</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <label class=\"add-tag\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateTagModal')\">Añadir nuevo tag</label>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateTagModal\" data-toggle=\"modal\" data-target=\"#createTagModal\"></button>
                            <div class=\"modal fade\" id=\"createTagModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                            <h4 style=\"text-align: center; color: #00766c\">Añadir nueva etiqueta</h4>
                                            <hr/>
                                            <label for=\"tag_name\">Nombre:</label><input type=\"text\" id=\"tag_name\" name=\"tag_name\" class=\"form-control\">
                                            <label for=\"tag_description\">Descripción:</label><textarea type=\"text\" id=\"tag_description\" name=\"tag_description\" class=\"form-control\"></textarea>
                                            <label for=\"tag_level\">Nivel:</label><input type=\"number\" id=\"tag_level\" name=\"tag_description\" class=\"form-control\">
                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar etiqueta\"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"col-sm-12 nutritionist-tags\">
                                {% for tag in tags %}
                                    <div class=\"tag-entry\" style=\"height: 9rem\">
                                        <div class=\"col-sm-11 tag-resume\">
                                            <h4 style=\"color: #00766c\">{{ tag.name }}</h4>
                                            <p>{{ tag.description }}</p>
                                            <p><strong>Nivel:</strong>{{ tag.level }}</p>
                                        </div>
                                        <div class=\"col-sm-1 tag-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-25px;width: 2rem;height: 2rem;\"
                                                 onclick=\"openModal('openEditTagModal')\">
                                                <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                            </svg>
                                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditTagModal\" data-toggle=\"modal\" data-target=\"#editTagModal\"></button>
                                            <div class=\"modal fade\" id=\"editTagModal\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                                        <!-- Modal body -->
                                                        <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                                            <h4 style=\"text-align: center; color: #00766c\">Modificar etiqueta</h4>
                                                            <hr/>
                                                            <label for=\"tag_name\">Nombre:</label><input type=\"text\" id=\"tag_name\" name=\"tag_name\" class=\"form-control\" value=\"{{ tag.name }}\">
                                                            <label for=\"tag_description\">Descripción:</label><textarea type=\"text\" id=\"tag_description\" name=\"tag_description\" class=\"form-control\">{{ tag.description }}</textarea>
                                                            <label for=\"tag_level\">Nivel:</label><input type=\"number\" id=\"tag_level\" name=\"tag_description\" class=\"form-control\" value=\"{{ tag.level }}\">
                                                            <input type=\"hidden\" id=\"id_tag_edit\" name=\"id_tag_edit\" value=\"{{ tag.idTag }}\">
                                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Modificar etiqueta\"/>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                            <hr/>
                            <label style=\"float: left; padding-left: 15px\">Ejercicios:</label>
                            <label class=\"add-exercise\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateExerciseModal')\">Añadir nuevo ejercicio:</label>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateExerciseModal\" data-toggle=\"modal\" data-target=\"#createExerciseModal\"></button>
                            <div class=\"modal fade\" id=\"createExerciseModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                            <h4 style=\"text-align: center; color: #00766c\">Añadir nuevo ejercicio</h4>
                                            <label for=\"exercise_title\">Nombre:</label><input type=\"text\" id=\"exercise_title\" name=\"exercise_title\" class=\"form-control\">
                                            <label for=\"exercise_description\">Descripción:</label><textarea type=\"text\" id=\"exercise_description\" name=\"exercise_description\" class=\"form-control\"></textarea>
                                            <label for=\"exercise_muscles\">Músculos trabajados:</label><textarea type=\"text\" id=\"exercise_muscles\" name=\"exercise_muscles\" class=\"form-control\"></textarea>
                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar ejercicio\"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"col-sm-12 nutritionist-exercises\">
                                {% for exercise in exercises %}
                                    <div class=\"exercise-entry\" style=\"height: 9rem\">
                                        <div class=\"col-sm-11 exercise-resume\">
                                            <h4 style=\"color: #00766c\">{{ exercise.title }}</h4>
                                            <p>{{ exercise.description|length > 100 ? exercise.description|slice(0, 100) ~ '...' : exercise.description }}</p>
                                        </div>
                                        <div class=\"col-sm-1 exercise-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-15px;width: 2rem;height: 2rem;\"
                                                 onclick=\"openModal('openEditExerciseModal')\">
                                                <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                            </svg>
                                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditExerciseModal\" data-toggle=\"modal\" data-target=\"#editExerciseModal\"></button>
                                            <div class=\"modal fade\" id=\"editExerciseModal\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                                        <!-- Modal body -->
                                                        <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                                            <h4 style=\"text-align: center; color: #00766c\">Editar ejercicio</h4>
                                                            <label for=\"exercise_title\">Nombre:</label><input type=\"text\" id=\"exercise_title\" name=\"exercise_title\" class=\"form-control\" value=\"{{ exercise.title }}\">
                                                            <label for=\"exercise_description\">Descripción:</label><textarea type=\"text\" id=\"exercise_description\" name=\"exercise_description\" class=\"form-control\">{{ exercise.description }}</textarea>
                                                            <label for=\"exercise_muscles\">Músculos trabajados:</label><textarea type=\"text\" id=\"exercise_muscles\" name=\"exercise_muscles\" class=\"form-control\">{{ exercise.muscles }}</textarea>
                                                            <input type=\"hidden\" id=\"id_exercise_edit\" name=\"id_exercise_edit\" value=\"{{ exercise.idExercise }}\">
                                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Modificar ejercicio\"/>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                            <label style=\"float: left; padding-left: 15px\">Categorias:</label>
                            <label class=\"add-category\" style=\"float: right; padding-right: 15px\" onclick=\"openModal('openCreateCategoryModal')\">Añadir nueva categoria</label>
                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openCreateCategoryModal\" data-toggle=\"modal\" data-target=\"#createCategoryModal\"></button>
                            <div class=\"modal fade\" id=\"createCategoryModal\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                        <!-- Modal body -->
                                        <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                            <h4 style=\"text-align: center; color: #00766c\">Añadir nueva categoría</h4>
                                            <label for=\"category_name\">Nombre:</label><input type=\"text\" id=\"category_name\" name=\"category_name\" class=\"form-control\">
                                            <label for=\"category_description_short\">Descripción corta:</label><textarea type=\"text\" id=\"category_description_short\" name=\"category_description_short\" class=\"form-control\"></textarea>
                                            <label for=\"category_description\">Descripción larga:</label><textarea type=\"text\" id=\"category_description\" name=\"category_description\" class=\"form-control\"></textarea>
                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Guardar categoria\"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 nutritionist-categories\">
                                {% for category in categories %}
                                    <div class=\"category-entry\">
                                        <div class=\"col-sm-11 category-resume\">
                                            <h4 style=\"color: #00766c\">{{ category.name }}</h4>
                                            <p>{{ category.descriptionShort }}</p>
                                        </div>
                                        <div class=\"col-sm-1 category-actions\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewBox=\"0 0 16 16\" style=\"margin-bottom:-15px;width: 2rem;height: 2rem;\"
                                                 onclick=\"openModal('openEditCategoryModal')\">
                                                <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                                            </svg>
                                            <button style=\"display: none\" type=\"button\" class=\"btn btn-primary\" id=\"openEditCategoryModal\" data-toggle=\"modal\" data-target=\"#editCategoryModal\"></button>
                                            <div class=\"modal fade\" id=\"editCategoryModal\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\" style=\"height: 40rem;width: 50rem;padding: 40px 30px;\">
                                                        <!-- Modal body -->
                                                        <form class=\"form\" action=\"{{ path(\"nutritionist_configuration\") }}\" method=\"post\">
                                                            <h4 style=\"text-align: center; color: #00766c\">Editar categoria</h4>
                                                            <label for=\"category_name\">Nombre:</label><input type=\"text\" id=\"category_name\" name=\"category_name\" class=\"form-control\" value=\"{{ category.name }}\">
                                                            <label for=\"category_description_short\">Descripción corta:</label><textarea type=\"text\" id=\"category_description_short\" name=\"category_description_short\" class=\"form-control\">{{ category.descriptionShort }}</textarea>
                                                            <label for=\"category_description\">Descripción larga:</label><textarea type=\"text\" id=\"category_description\" name=\"category_description\" class=\"form-control\">{{ category.description }}</textarea>
                                                            <input type=\"hidden\" id=\"id_category_edit\" name=\"id_category_edit\" value=\"{{ category.idCategory }}\">
                                                            <input class=\"btn save-button\" type=\"submit\" name=\"submit\" value=\"Modificar categoria\"/>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </html>
{% endblock %}
", "@Nutritionist/nutritionist-config.html.twig", "/shared/httpd/nutrik/src/NutritionistBundle/Resources/views/nutritionist-config.html.twig");
    }
}
