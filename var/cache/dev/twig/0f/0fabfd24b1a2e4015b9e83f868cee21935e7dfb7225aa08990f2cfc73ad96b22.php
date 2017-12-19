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
        $__internal_1597597ce8c29c4e5d9881a06b2b34a730c5d4d9d45855d06c971c5ba67eefd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1597597ce8c29c4e5d9881a06b2b34a730c5d4d9d45855d06c971c5ba67eefd5->enter($__internal_1597597ce8c29c4e5d9881a06b2b34a730c5d4d9d45855d06c971c5ba67eefd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0c6df66cc66a09d1468853587bbce5aaf55e3821bb550bcd8f8180238681107a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6df66cc66a09d1468853587bbce5aaf55e3821bb550bcd8f8180238681107a->enter($__internal_0c6df66cc66a09d1468853587bbce5aaf55e3821bb550bcd8f8180238681107a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1597597ce8c29c4e5d9881a06b2b34a730c5d4d9d45855d06c971c5ba67eefd5->leave($__internal_1597597ce8c29c4e5d9881a06b2b34a730c5d4d9d45855d06c971c5ba67eefd5_prof);

        
        $__internal_0c6df66cc66a09d1468853587bbce5aaf55e3821bb550bcd8f8180238681107a->leave($__internal_0c6df66cc66a09d1468853587bbce5aaf55e3821bb550bcd8f8180238681107a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7e8aa2814cb7ac25c020fa61079669c329f08857b367e40babf69660033bfea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8aa2814cb7ac25c020fa61079669c329f08857b367e40babf69660033bfea9->enter($__internal_7e8aa2814cb7ac25c020fa61079669c329f08857b367e40babf69660033bfea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1f40ba9badea283be38fd8c6d64989e2bfd42b336f92d6241ca558bda9972073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f40ba9badea283be38fd8c6d64989e2bfd42b336f92d6241ca558bda9972073->enter($__internal_1f40ba9badea283be38fd8c6d64989e2bfd42b336f92d6241ca558bda9972073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1f40ba9badea283be38fd8c6d64989e2bfd42b336f92d6241ca558bda9972073->leave($__internal_1f40ba9badea283be38fd8c6d64989e2bfd42b336f92d6241ca558bda9972073_prof);

        
        $__internal_7e8aa2814cb7ac25c020fa61079669c329f08857b367e40babf69660033bfea9->leave($__internal_7e8aa2814cb7ac25c020fa61079669c329f08857b367e40babf69660033bfea9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b09cadce9369203b47945af45a252df4f526a396043c7287350d8788a5499b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09cadce9369203b47945af45a252df4f526a396043c7287350d8788a5499b9e->enter($__internal_b09cadce9369203b47945af45a252df4f526a396043c7287350d8788a5499b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_949aae1c8ffd30a54910308dd44019ceb8dc08146052a97ee3d35ac23d1aee01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949aae1c8ffd30a54910308dd44019ceb8dc08146052a97ee3d35ac23d1aee01->enter($__internal_949aae1c8ffd30a54910308dd44019ceb8dc08146052a97ee3d35ac23d1aee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_949aae1c8ffd30a54910308dd44019ceb8dc08146052a97ee3d35ac23d1aee01->leave($__internal_949aae1c8ffd30a54910308dd44019ceb8dc08146052a97ee3d35ac23d1aee01_prof);

        
        $__internal_b09cadce9369203b47945af45a252df4f526a396043c7287350d8788a5499b9e->leave($__internal_b09cadce9369203b47945af45a252df4f526a396043c7287350d8788a5499b9e_prof);

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
        title:   (token|Default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|Default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|Default('') ~ '\" was not found in the database.'
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
