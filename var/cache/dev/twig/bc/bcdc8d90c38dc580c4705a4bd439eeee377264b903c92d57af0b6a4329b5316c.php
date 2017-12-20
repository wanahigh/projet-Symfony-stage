<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_19e30f9a918ee9ac94204210b002ce44de79f239e7fb32bb3ed31bdcd3f5822f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbf8a2350e17c918c157af9edb6cb0b96719a82be92174054a464b69b044cfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf8a2350e17c918c157af9edb6cb0b96719a82be92174054a464b69b044cfd9->enter($__internal_bbf8a2350e17c918c157af9edb6cb0b96719a82be92174054a464b69b044cfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_8df342d8aacb782f469ce8d8a0de3b0addb379763a7314075fb07eb6f69cc4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df342d8aacb782f469ce8d8a0de3b0addb379763a7314075fb07eb6f69cc4b1->enter($__internal_8df342d8aacb782f469ce8d8a0de3b0addb379763a7314075fb07eb6f69cc4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbf8a2350e17c918c157af9edb6cb0b96719a82be92174054a464b69b044cfd9->leave($__internal_bbf8a2350e17c918c157af9edb6cb0b96719a82be92174054a464b69b044cfd9_prof);

        
        $__internal_8df342d8aacb782f469ce8d8a0de3b0addb379763a7314075fb07eb6f69cc4b1->leave($__internal_8df342d8aacb782f469ce8d8a0de3b0addb379763a7314075fb07eb6f69cc4b1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_babaf99ece18e04c37ac447c6019d8bafbf9c8c8371771d07f66405ef794e59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babaf99ece18e04c37ac447c6019d8bafbf9c8c8371771d07f66405ef794e59e->enter($__internal_babaf99ece18e04c37ac447c6019d8bafbf9c8c8371771d07f66405ef794e59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b0257c49b5b0483b67b290728ed0079d7eb98c857b47e1f09145f0905b24851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0257c49b5b0483b67b290728ed0079d7eb98c857b47e1f09145f0905b24851->enter($__internal_4b0257c49b5b0483b67b290728ed0079d7eb98c857b47e1f09145f0905b24851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4b0257c49b5b0483b67b290728ed0079d7eb98c857b47e1f09145f0905b24851->leave($__internal_4b0257c49b5b0483b67b290728ed0079d7eb98c857b47e1f09145f0905b24851_prof);

        
        $__internal_babaf99ece18e04c37ac447c6019d8bafbf9c8c8371771d07f66405ef794e59e->leave($__internal_babaf99ece18e04c37ac447c6019d8bafbf9c8c8371771d07f66405ef794e59e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
