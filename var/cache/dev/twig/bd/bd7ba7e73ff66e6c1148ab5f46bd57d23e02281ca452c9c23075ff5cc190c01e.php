<?php

/* AcmeContactBundle:Default:contact.html.twig */
class __TwigTemplate_cb693f8f08a566c0fa87b3b8dee001af0c6ce7a43790f10fa94200c3ea5abfbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31f607d32613d9d628fc0fae5408c1f906080b3860a691616403c0f05d2fd8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f607d32613d9d628fc0fae5408c1f906080b3860a691616403c0f05d2fd8aa->enter($__internal_31f607d32613d9d628fc0fae5408c1f906080b3860a691616403c0f05d2fd8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeContactBundle:Default:contact.html.twig"));

        $__internal_3c6094ecc1bdbd078e81a68c230af665233b48bf58b32c92efa9022993c96e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6094ecc1bdbd078e81a68c230af665233b48bf58b32c92efa9022993c96e19->enter($__internal_3c6094ecc1bdbd078e81a68c230af665233b48bf58b32c92efa9022993c96e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeContactBundle:Default:contact.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'form_start');
        echo "

<div>
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "subject", array()), 'widget');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "subject", array()), 'errors');
        echo "
</div>
<div>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "name", array()), 'widget');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo "
</div>
<div>
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "email", array()), 'widget');
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
</div>
<div>
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "message", array()), 'widget');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "message", array()), 'errors');
        echo "
</div>

";
        // line 22
        echo "<div style=\"display:none\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'rest');
        echo "
</div>

<input type=\"submit\" value=\"Submit\">

";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_31f607d32613d9d628fc0fae5408c1f906080b3860a691616403c0f05d2fd8aa->leave($__internal_31f607d32613d9d628fc0fae5408c1f906080b3860a691616403c0f05d2fd8aa_prof);

        
        $__internal_3c6094ecc1bdbd078e81a68c230af665233b48bf58b32c92efa9022993c96e19->leave($__internal_3c6094ecc1bdbd078e81a68c230af665233b48bf58b32c92efa9022993c96e19_prof);

    }

    public function getTemplateName()
    {
        return "AcmeContactBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  77 => 23,  74 => 22,  68 => 18,  64 => 17,  58 => 14,  54 => 13,  48 => 10,  44 => 9,  38 => 6,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{{ form_start(form) }}

<div>
    {{ form_widget(form.subject) }}
    {{ form_errors(form.subject) }}
</div>
<div>
    {{ form_widget(form.name) }}
    {{ form_errors(form.name) }}
</div>
<div>
    {{ form_widget(form.email) }}
    {{ form_errors(form.email) }}
</div>
<div>
    {{ form_widget(form.message) }}
    {{ form_errors(form.message) }}
</div>

{# Render CSRF token etc .#}
<div style=\"display:none\">
    {{ form_rest(form) }}
</div>

<input type=\"submit\" value=\"Submit\">

{{ form_end(form) }}", "AcmeContactBundle:Default:contact.html.twig", "/var/www/html/Projet-Symfony-master/src/Acme/ContactBundle/Resources/views/Default/contact.html.twig");
    }
}
