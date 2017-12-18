<?php

/* AcmeContactBundle:Default:index.html.twig */
class __TwigTemplate_5f5d1c8b73e635d72f7b5f1f03e8bece8d1d369f208d1ba8cda078b5ee150a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AcmeContactBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8751b3a584b94928ad7024c16335421417bcc23a7873b47e84ecdff386beab54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8751b3a584b94928ad7024c16335421417bcc23a7873b47e84ecdff386beab54->enter($__internal_8751b3a584b94928ad7024c16335421417bcc23a7873b47e84ecdff386beab54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeContactBundle:Default:index.html.twig"));

        $__internal_e459e4f8cf2a40a51e2ed62eb716a06d4fb29558fe874c630cf0d9b874d06831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e459e4f8cf2a40a51e2ed62eb716a06d4fb29558fe874c630cf0d9b874d06831->enter($__internal_e459e4f8cf2a40a51e2ed62eb716a06d4fb29558fe874c630cf0d9b874d06831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeContactBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8751b3a584b94928ad7024c16335421417bcc23a7873b47e84ecdff386beab54->leave($__internal_8751b3a584b94928ad7024c16335421417bcc23a7873b47e84ecdff386beab54_prof);

        
        $__internal_e459e4f8cf2a40a51e2ed62eb716a06d4fb29558fe874c630cf0d9b874d06831->leave($__internal_e459e4f8cf2a40a51e2ed62eb716a06d4fb29558fe874c630cf0d9b874d06831_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d610bbe10ba31c84e94307adeee5a5c8e107d250297f39bb6edb41c654ff376b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d610bbe10ba31c84e94307adeee5a5c8e107d250297f39bb6edb41c654ff376b->enter($__internal_d610bbe10ba31c84e94307adeee5a5c8e107d250297f39bb6edb41c654ff376b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d443f3a0ae1f8cc3a904d9ec02572df8aa3cd12dd79ea745f5e54c90b690c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d443f3a0ae1f8cc3a904d9ec02572df8aa3cd12dd79ea745f5e54c90b690c68->enter($__internal_7d443f3a0ae1f8cc3a904d9ec02572df8aa3cd12dd79ea745f5e54c90b690c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'errors');
        echo "

    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "dueDate", array()), 'row');
        echo "

    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "submit", array()), 'row', array("label" => "Submit me"));
        echo "
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_7d443f3a0ae1f8cc3a904d9ec02572df8aa3cd12dd79ea745f5e54c90b690c68->leave($__internal_7d443f3a0ae1f8cc3a904d9ec02572df8aa3cd12dd79ea745f5e54c90b690c68_prof);

        
        $__internal_d610bbe10ba31c84e94307adeee5a5c8e107d250297f39bb6edb41c654ff376b->leave($__internal_d610bbe10ba31c84e94307adeee5a5c8e107d250297f39bb6edb41c654ff376b_prof);

    }

    public function getTemplateName()
    {
        return "AcmeContactBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  67 => 11,  62 => 9,  58 => 8,  53 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}


{% block body %}
{{ form_start(form) }}
    {{ form_errors(form) }}

    {{ form_row(form.name) }}
    {{ form_row(form.dueDate) }}

    {{ form_row(form.submit, { 'label': 'Submit me' }) }}
{{ form_end(form) }}
{% endblock %}", "AcmeContactBundle:Default:index.html.twig", "/var/www/html/Projet-Symfony-master/src/Acme/ContactBundle/Resources/views/Default/index.html.twig");
    }
}
