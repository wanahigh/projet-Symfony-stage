<?php

/* AcmeHomeBundle::layout.html.twig */
class __TwigTemplate_cf91ec54f5dbcb8ae5b5535fd110186e2fe49090b569173850b4e791303d0fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeHomeBundle::layout.html.twig", 6);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1a41147860d91958ee85547847ce7b65d1ae76c76a3667a164a858869f59938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a41147860d91958ee85547847ce7b65d1ae76c76a3667a164a858869f59938->enter($__internal_c1a41147860d91958ee85547847ce7b65d1ae76c76a3667a164a858869f59938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::layout.html.twig"));

        $__internal_a7a18a643c3b183c98d59e8971a95c329a2191993f091361eeaa1aa104bec1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a18a643c3b183c98d59e8971a95c329a2191993f091361eeaa1aa104bec1b2->enter($__internal_a7a18a643c3b183c98d59e8971a95c329a2191993f091361eeaa1aa104bec1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a41147860d91958ee85547847ce7b65d1ae76c76a3667a164a858869f59938->leave($__internal_c1a41147860d91958ee85547847ce7b65d1ae76c76a3667a164a858869f59938_prof);

        
        $__internal_a7a18a643c3b183c98d59e8971a95c329a2191993f091361eeaa1aa104bec1b2->leave($__internal_a7a18a643c3b183c98d59e8971a95c329a2191993f091361eeaa1aa104bec1b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d19fc40d6bb778644fb60c9facc2f8fa346157af8e0cb06ee6b2db7d740ad6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19fc40d6bb778644fb60c9facc2f8fa346157af8e0cb06ee6b2db7d740ad6fb->enter($__internal_d19fc40d6bb778644fb60c9facc2f8fa346157af8e0cb06ee6b2db7d740ad6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f40cb84bd66abbd6b5cd87280c6715bdad4cfe1453235291baad23915df7f8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40cb84bd66abbd6b5cd87280c6715bdad4cfe1453235291baad23915df7f8af->enter($__internal_f40cb84bd66abbd6b5cd87280c6715bdad4cfe1453235291baad23915df7f8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "

    ";
        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 17
            echo "
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "
            <div class=\"alert alert-";
                // line 20
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">

                ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "

            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "

    ";
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 36
        echo "

";
        
        $__internal_f40cb84bd66abbd6b5cd87280c6715bdad4cfe1453235291baad23915df7f8af->leave($__internal_f40cb84bd66abbd6b5cd87280c6715bdad4cfe1453235291baad23915df7f8af_prof);

        
        $__internal_d19fc40d6bb778644fb60c9facc2f8fa346157af8e0cb06ee6b2db7d740ad6fb->leave($__internal_d19fc40d6bb778644fb60c9facc2f8fa346157af8e0cb06ee6b2db7d740ad6fb_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90e05fa536e7327eea2a14f252195bf3a00fc01948bd65b246be9f8fcf14e6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e05fa536e7327eea2a14f252195bf3a00fc01948bd65b246be9f8fcf14e6be->enter($__internal_90e05fa536e7327eea2a14f252195bf3a00fc01948bd65b246be9f8fcf14e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fd862433ae2e1361f123456f632a214e00171cf35d8ee213464a3c2b4912c1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd862433ae2e1361f123456f632a214e00171cf35d8ee213464a3c2b4912c1e7->enter($__internal_fd862433ae2e1361f123456f632a214e00171cf35d8ee213464a3c2b4912c1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "
    ";
        
        $__internal_fd862433ae2e1361f123456f632a214e00171cf35d8ee213464a3c2b4912c1e7->leave($__internal_fd862433ae2e1361f123456f632a214e00171cf35d8ee213464a3c2b4912c1e7_prof);

        
        $__internal_90e05fa536e7327eea2a14f252195bf3a00fc01948bd65b246be9f8fcf14e6be->leave($__internal_90e05fa536e7327eea2a14f252195bf3a00fc01948bd65b246be9f8fcf14e6be_prof);

    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  115 => 33,  103 => 36,  101 => 33,  98 => 32,  94 => 29,  87 => 27,  76 => 22,  71 => 20,  68 => 19,  64 => 18,  61 => 17,  57 => 16,  54 => 15,  50 => 12,  41 => 11,  11 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/UserBundle/Resources/views/layout.html.twig #}


{# On étend notre layout #}

{% extends \"::base.html.twig\" %}


{# Dans notre layout, il faut définir le block body #}

{% block body %}


    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

    {% for key, messages in app.session.flashbag.all() %}

        {% for message in messages %}

            <div class=\"alert alert-{{ key }}\">

                {{ message|trans({}, 'FOSUserBundle') }}

            </div>

        {% endfor %}

    {% endfor %}


    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}

    {% block fos_user_content %}

    {% endblock fos_user_content %}


{% endblock %}", "AcmeHomeBundle::layout.html.twig", "/var/www/html/Projet-Symfony-master/src/Acme/HomeBundle/Resources/views/layout.html.twig");
    }
}
