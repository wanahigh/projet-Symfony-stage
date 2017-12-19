<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_21f90cf27df5ef399fad89b188241747e3c89ea570ee3c045fcad7194100fdd7 extends Twig_Template
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
        $__internal_558353d793728d427441652bc9408ee94748c51aee9ae4a7a1ac39c7b356c23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558353d793728d427441652bc9408ee94748c51aee9ae4a7a1ac39c7b356c23a->enter($__internal_558353d793728d427441652bc9408ee94748c51aee9ae4a7a1ac39c7b356c23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_00a697bffce6da58d1ca8be266f08bde84684cc7dbf3415fc5d641854ef6883c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a697bffce6da58d1ca8be266f08bde84684cc7dbf3415fc5d641854ef6883c->enter($__internal_00a697bffce6da58d1ca8be266f08bde84684cc7dbf3415fc5d641854ef6883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_558353d793728d427441652bc9408ee94748c51aee9ae4a7a1ac39c7b356c23a->leave($__internal_558353d793728d427441652bc9408ee94748c51aee9ae4a7a1ac39c7b356c23a_prof);

        
        $__internal_00a697bffce6da58d1ca8be266f08bde84684cc7dbf3415fc5d641854ef6883c->leave($__internal_00a697bffce6da58d1ca8be266f08bde84684cc7dbf3415fc5d641854ef6883c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
