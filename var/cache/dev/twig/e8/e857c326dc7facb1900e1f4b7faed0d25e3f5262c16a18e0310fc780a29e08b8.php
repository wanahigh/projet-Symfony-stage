<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_977f672eb2fcfed205083601504184310e1cc30f7a06d39d341e11216d4261f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977f672eb2fcfed205083601504184310e1cc30f7a06d39d341e11216d4261f2->enter($__internal_977f672eb2fcfed205083601504184310e1cc30f7a06d39d341e11216d4261f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3471fbdb0836b74cc8e95beff7334bcdc171fa2a63e94cf89c23173624f4cd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3471fbdb0836b74cc8e95beff7334bcdc171fa2a63e94cf89c23173624f4cd6e->enter($__internal_3471fbdb0836b74cc8e95beff7334bcdc171fa2a63e94cf89c23173624f4cd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977f672eb2fcfed205083601504184310e1cc30f7a06d39d341e11216d4261f2->leave($__internal_977f672eb2fcfed205083601504184310e1cc30f7a06d39d341e11216d4261f2_prof);

        
        $__internal_3471fbdb0836b74cc8e95beff7334bcdc171fa2a63e94cf89c23173624f4cd6e->leave($__internal_3471fbdb0836b74cc8e95beff7334bcdc171fa2a63e94cf89c23173624f4cd6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_078db896685999c7d7fcc42bc0a11702dc5f05565e6c29c51789c5bf80cb4a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078db896685999c7d7fcc42bc0a11702dc5f05565e6c29c51789c5bf80cb4a30->enter($__internal_078db896685999c7d7fcc42bc0a11702dc5f05565e6c29c51789c5bf80cb4a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2595e227d9585f90e31d37cff54d0641a4baa2fcadb137b348438870ca7ba369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2595e227d9585f90e31d37cff54d0641a4baa2fcadb137b348438870ca7ba369->enter($__internal_2595e227d9585f90e31d37cff54d0641a4baa2fcadb137b348438870ca7ba369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2595e227d9585f90e31d37cff54d0641a4baa2fcadb137b348438870ca7ba369->leave($__internal_2595e227d9585f90e31d37cff54d0641a4baa2fcadb137b348438870ca7ba369_prof);

        
        $__internal_078db896685999c7d7fcc42bc0a11702dc5f05565e6c29c51789c5bf80cb4a30->leave($__internal_078db896685999c7d7fcc42bc0a11702dc5f05565e6c29c51789c5bf80cb4a30_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfd06bf57a41026212a9ff472d8e6a842d424f2ed8f1dfdada6119269cee77aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd06bf57a41026212a9ff472d8e6a842d424f2ed8f1dfdada6119269cee77aa->enter($__internal_bfd06bf57a41026212a9ff472d8e6a842d424f2ed8f1dfdada6119269cee77aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4651986a029e71656f2e42659a29e57e7682aa0027e4032ad7b11951edec1ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4651986a029e71656f2e42659a29e57e7682aa0027e4032ad7b11951edec1ce7->enter($__internal_4651986a029e71656f2e42659a29e57e7682aa0027e4032ad7b11951edec1ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4651986a029e71656f2e42659a29e57e7682aa0027e4032ad7b11951edec1ce7->leave($__internal_4651986a029e71656f2e42659a29e57e7682aa0027e4032ad7b11951edec1ce7_prof);

        
        $__internal_bfd06bf57a41026212a9ff472d8e6a842d424f2ed8f1dfdada6119269cee77aa->leave($__internal_bfd06bf57a41026212a9ff472d8e6a842d424f2ed8f1dfdada6119269cee77aa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48e767114e8875571a11e5ea4b268f0c8c37419f9f463060f652bf0f6eaf5452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e767114e8875571a11e5ea4b268f0c8c37419f9f463060f652bf0f6eaf5452->enter($__internal_48e767114e8875571a11e5ea4b268f0c8c37419f9f463060f652bf0f6eaf5452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8410e7f93c03f6b85f9522378e5190bbfe09932033fb45e6412c359dfd71f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8410e7f93c03f6b85f9522378e5190bbfe09932033fb45e6412c359dfd71f87->enter($__internal_e8410e7f93c03f6b85f9522378e5190bbfe09932033fb45e6412c359dfd71f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_e8410e7f93c03f6b85f9522378e5190bbfe09932033fb45e6412c359dfd71f87->leave($__internal_e8410e7f93c03f6b85f9522378e5190bbfe09932033fb45e6412c359dfd71f87_prof);

        
        $__internal_48e767114e8875571a11e5ea4b268f0c8c37419f9f463060f652bf0f6eaf5452->leave($__internal_48e767114e8875571a11e5ea4b268f0c8c37419f9f463060f652bf0f6eaf5452_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
