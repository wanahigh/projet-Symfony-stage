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
        $__internal_12aeb19d18bfbd7be255f5b10a2ff1aff70112d05604ac661d243350b649ce7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12aeb19d18bfbd7be255f5b10a2ff1aff70112d05604ac661d243350b649ce7f->enter($__internal_12aeb19d18bfbd7be255f5b10a2ff1aff70112d05604ac661d243350b649ce7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_ab47ec88935aa0aafb70f8e1e5573054da38ae9a52f7d58fc176ab3fc19fb3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab47ec88935aa0aafb70f8e1e5573054da38ae9a52f7d58fc176ab3fc19fb3c8->enter($__internal_ab47ec88935aa0aafb70f8e1e5573054da38ae9a52f7d58fc176ab3fc19fb3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12aeb19d18bfbd7be255f5b10a2ff1aff70112d05604ac661d243350b649ce7f->leave($__internal_12aeb19d18bfbd7be255f5b10a2ff1aff70112d05604ac661d243350b649ce7f_prof);

        
        $__internal_ab47ec88935aa0aafb70f8e1e5573054da38ae9a52f7d58fc176ab3fc19fb3c8->leave($__internal_ab47ec88935aa0aafb70f8e1e5573054da38ae9a52f7d58fc176ab3fc19fb3c8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73588cd69339e98ee1324d26d31afa9b7a6c6ae10735ef497494f8374c89210e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73588cd69339e98ee1324d26d31afa9b7a6c6ae10735ef497494f8374c89210e->enter($__internal_73588cd69339e98ee1324d26d31afa9b7a6c6ae10735ef497494f8374c89210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_936a4a514fe330c3a43297ab2a2bba73f95e6d3cc773e34be915bc12876de4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936a4a514fe330c3a43297ab2a2bba73f95e6d3cc773e34be915bc12876de4ab->enter($__internal_936a4a514fe330c3a43297ab2a2bba73f95e6d3cc773e34be915bc12876de4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_936a4a514fe330c3a43297ab2a2bba73f95e6d3cc773e34be915bc12876de4ab->leave($__internal_936a4a514fe330c3a43297ab2a2bba73f95e6d3cc773e34be915bc12876de4ab_prof);

        
        $__internal_73588cd69339e98ee1324d26d31afa9b7a6c6ae10735ef497494f8374c89210e->leave($__internal_73588cd69339e98ee1324d26d31afa9b7a6c6ae10735ef497494f8374c89210e_prof);

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
