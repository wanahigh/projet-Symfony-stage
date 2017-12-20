<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cfa545a5f937852f255a6aabe862531e7bdf4b5b8a1d05363efb8c25c8fd9339 extends Twig_Template
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
        $__internal_c396e8be0a6f53d3b9300b6294882932ba1ff300f14de5905a5a39021df81ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c396e8be0a6f53d3b9300b6294882932ba1ff300f14de5905a5a39021df81ea7->enter($__internal_c396e8be0a6f53d3b9300b6294882932ba1ff300f14de5905a5a39021df81ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c57b45dfc0a0e5a8182631386d278f6d2dd196324b41eae841193a9e502708f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57b45dfc0a0e5a8182631386d278f6d2dd196324b41eae841193a9e502708f0->enter($__internal_c57b45dfc0a0e5a8182631386d278f6d2dd196324b41eae841193a9e502708f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_c396e8be0a6f53d3b9300b6294882932ba1ff300f14de5905a5a39021df81ea7->leave($__internal_c396e8be0a6f53d3b9300b6294882932ba1ff300f14de5905a5a39021df81ea7_prof);

        
        $__internal_c57b45dfc0a0e5a8182631386d278f6d2dd196324b41eae841193a9e502708f0->leave($__internal_c57b45dfc0a0e5a8182631386d278f6d2dd196324b41eae841193a9e502708f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
