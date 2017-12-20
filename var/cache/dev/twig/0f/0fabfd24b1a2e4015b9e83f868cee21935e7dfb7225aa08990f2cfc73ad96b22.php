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
        $__internal_43d10f3082708a28674552ef435c49f20573eec79d5216e2dc3f57596e98f412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d10f3082708a28674552ef435c49f20573eec79d5216e2dc3f57596e98f412->enter($__internal_43d10f3082708a28674552ef435c49f20573eec79d5216e2dc3f57596e98f412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9f6ef74679242751f76dbf05a2e87162bdb43d6ec4b06a00b91139348f72cbdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6ef74679242751f76dbf05a2e87162bdb43d6ec4b06a00b91139348f72cbdd->enter($__internal_9f6ef74679242751f76dbf05a2e87162bdb43d6ec4b06a00b91139348f72cbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d10f3082708a28674552ef435c49f20573eec79d5216e2dc3f57596e98f412->leave($__internal_43d10f3082708a28674552ef435c49f20573eec79d5216e2dc3f57596e98f412_prof);

        
        $__internal_9f6ef74679242751f76dbf05a2e87162bdb43d6ec4b06a00b91139348f72cbdd->leave($__internal_9f6ef74679242751f76dbf05a2e87162bdb43d6ec4b06a00b91139348f72cbdd_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d76b217c558a676de071910121bfe8a5c5e5f6599e53f957213d4c1d1484c2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76b217c558a676de071910121bfe8a5c5e5f6599e53f957213d4c1d1484c2e9->enter($__internal_d76b217c558a676de071910121bfe8a5c5e5f6599e53f957213d4c1d1484c2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4166b705ae2262c1ebdb82c453f255756b85498debcecc54a2f4f6be5e514d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4166b705ae2262c1ebdb82c453f255756b85498debcecc54a2f4f6be5e514d88->enter($__internal_4166b705ae2262c1ebdb82c453f255756b85498debcecc54a2f4f6be5e514d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4166b705ae2262c1ebdb82c453f255756b85498debcecc54a2f4f6be5e514d88->leave($__internal_4166b705ae2262c1ebdb82c453f255756b85498debcecc54a2f4f6be5e514d88_prof);

        
        $__internal_d76b217c558a676de071910121bfe8a5c5e5f6599e53f957213d4c1d1484c2e9->leave($__internal_d76b217c558a676de071910121bfe8a5c5e5f6599e53f957213d4c1d1484c2e9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc21b9491008b052b1f5190196b6b3cef118eba50d0f1959f45f6123bce69f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc21b9491008b052b1f5190196b6b3cef118eba50d0f1959f45f6123bce69f46->enter($__internal_cc21b9491008b052b1f5190196b6b3cef118eba50d0f1959f45f6123bce69f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39dc8c496c0802050bc0d8df75ced3720d0e9432afeb9b008c2b663d2b036cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dc8c496c0802050bc0d8df75ced3720d0e9432afeb9b008c2b663d2b036cc1->enter($__internal_39dc8c496c0802050bc0d8df75ced3720d0e9432afeb9b008c2b663d2b036cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_39dc8c496c0802050bc0d8df75ced3720d0e9432afeb9b008c2b663d2b036cc1->leave($__internal_39dc8c496c0802050bc0d8df75ced3720d0e9432afeb9b008c2b663d2b036cc1_prof);

        
        $__internal_cc21b9491008b052b1f5190196b6b3cef118eba50d0f1959f45f6123bce69f46->leave($__internal_cc21b9491008b052b1f5190196b6b3cef118eba50d0f1959f45f6123bce69f46_prof);

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
