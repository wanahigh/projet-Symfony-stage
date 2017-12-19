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
        $__internal_da23e4538e2252f504b104781dd28cfee4ad13b2ccf18ed5586975c147409a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da23e4538e2252f504b104781dd28cfee4ad13b2ccf18ed5586975c147409a47->enter($__internal_da23e4538e2252f504b104781dd28cfee4ad13b2ccf18ed5586975c147409a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_c751e8fb51f4c8d8e615a3aed54166337ced28fbf53ecd3f0debe7dc7512fab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c751e8fb51f4c8d8e615a3aed54166337ced28fbf53ecd3f0debe7dc7512fab2->enter($__internal_c751e8fb51f4c8d8e615a3aed54166337ced28fbf53ecd3f0debe7dc7512fab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da23e4538e2252f504b104781dd28cfee4ad13b2ccf18ed5586975c147409a47->leave($__internal_da23e4538e2252f504b104781dd28cfee4ad13b2ccf18ed5586975c147409a47_prof);

        
        $__internal_c751e8fb51f4c8d8e615a3aed54166337ced28fbf53ecd3f0debe7dc7512fab2->leave($__internal_c751e8fb51f4c8d8e615a3aed54166337ced28fbf53ecd3f0debe7dc7512fab2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a1d05af6dd74acc18dd3bafbbf0f7b8d11ca854cf7d8fd3163b712b2d4634d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1d05af6dd74acc18dd3bafbbf0f7b8d11ca854cf7d8fd3163b712b2d4634d7->enter($__internal_5a1d05af6dd74acc18dd3bafbbf0f7b8d11ca854cf7d8fd3163b712b2d4634d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5ac0f1d2eba65ab2d61096cd617278e0e76ac9441a5df937f2afab0b9e8a67e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac0f1d2eba65ab2d61096cd617278e0e76ac9441a5df937f2afab0b9e8a67e0->enter($__internal_5ac0f1d2eba65ab2d61096cd617278e0e76ac9441a5df937f2afab0b9e8a67e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_5ac0f1d2eba65ab2d61096cd617278e0e76ac9441a5df937f2afab0b9e8a67e0->leave($__internal_5ac0f1d2eba65ab2d61096cd617278e0e76ac9441a5df937f2afab0b9e8a67e0_prof);

        
        $__internal_5a1d05af6dd74acc18dd3bafbbf0f7b8d11ca854cf7d8fd3163b712b2d4634d7->leave($__internal_5a1d05af6dd74acc18dd3bafbbf0f7b8d11ca854cf7d8fd3163b712b2d4634d7_prof);

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
