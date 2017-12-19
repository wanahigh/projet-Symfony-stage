<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b2f8046f02df92d8a895beafb1e809f4c60a187d20c9a1a62b11c80e8a46182d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec6694b5113adf810d827310b114af42d17f740434baa9413a407c14a389044f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6694b5113adf810d827310b114af42d17f740434baa9413a407c14a389044f->enter($__internal_ec6694b5113adf810d827310b114af42d17f740434baa9413a407c14a389044f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b16a0f5ffbd02653ae9cd948d36434cbd70a68ae7fbdfae731468dbe3db8d297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16a0f5ffbd02653ae9cd948d36434cbd70a68ae7fbdfae731468dbe3db8d297->enter($__internal_b16a0f5ffbd02653ae9cd948d36434cbd70a68ae7fbdfae731468dbe3db8d297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6694b5113adf810d827310b114af42d17f740434baa9413a407c14a389044f->leave($__internal_ec6694b5113adf810d827310b114af42d17f740434baa9413a407c14a389044f_prof);

        
        $__internal_b16a0f5ffbd02653ae9cd948d36434cbd70a68ae7fbdfae731468dbe3db8d297->leave($__internal_b16a0f5ffbd02653ae9cd948d36434cbd70a68ae7fbdfae731468dbe3db8d297_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6acaddb011303337c17bd65b8084ac3ab346a12953bd448d852aa6bb833eda08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acaddb011303337c17bd65b8084ac3ab346a12953bd448d852aa6bb833eda08->enter($__internal_6acaddb011303337c17bd65b8084ac3ab346a12953bd448d852aa6bb833eda08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_154c9ce22f6465a8f7d6b4b5e858555036baa67e3deb3fab7364af414b00d5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154c9ce22f6465a8f7d6b4b5e858555036baa67e3deb3fab7364af414b00d5c8->enter($__internal_154c9ce22f6465a8f7d6b4b5e858555036baa67e3deb3fab7364af414b00d5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_154c9ce22f6465a8f7d6b4b5e858555036baa67e3deb3fab7364af414b00d5c8->leave($__internal_154c9ce22f6465a8f7d6b4b5e858555036baa67e3deb3fab7364af414b00d5c8_prof);

        
        $__internal_6acaddb011303337c17bd65b8084ac3ab346a12953bd448d852aa6bb833eda08->leave($__internal_6acaddb011303337c17bd65b8084ac3ab346a12953bd448d852aa6bb833eda08_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_191c0603e583453e42dc0f3d90898ea5e9b6d6f3d1477d36f8ac7331c53992d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191c0603e583453e42dc0f3d90898ea5e9b6d6f3d1477d36f8ac7331c53992d3->enter($__internal_191c0603e583453e42dc0f3d90898ea5e9b6d6f3d1477d36f8ac7331c53992d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e22730714e2cf985481b66a86e0ac91b1ff645205ca2ffe2529df0e59ebb3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e22730714e2cf985481b66a86e0ac91b1ff645205ca2ffe2529df0e59ebb3a4->enter($__internal_2e22730714e2cf985481b66a86e0ac91b1ff645205ca2ffe2529df0e59ebb3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2e22730714e2cf985481b66a86e0ac91b1ff645205ca2ffe2529df0e59ebb3a4->leave($__internal_2e22730714e2cf985481b66a86e0ac91b1ff645205ca2ffe2529df0e59ebb3a4_prof);

        
        $__internal_191c0603e583453e42dc0f3d90898ea5e9b6d6f3d1477d36f8ac7331c53992d3->leave($__internal_191c0603e583453e42dc0f3d90898ea5e9b6d6f3d1477d36f8ac7331c53992d3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
