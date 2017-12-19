<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9da032d9e006e712a25926552283262f55a6e96512ccd7350ae51433a01f5f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_517c2230909d50ea32a88d4cca91f197b13da4bfe2adacdc9fdc4eb28cbab720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517c2230909d50ea32a88d4cca91f197b13da4bfe2adacdc9fdc4eb28cbab720->enter($__internal_517c2230909d50ea32a88d4cca91f197b13da4bfe2adacdc9fdc4eb28cbab720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_50a48296cf9e7b37a986847318ffe15120a120eab3ec3e42d8ef739bb83a4dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a48296cf9e7b37a986847318ffe15120a120eab3ec3e42d8ef739bb83a4dfb->enter($__internal_50a48296cf9e7b37a986847318ffe15120a120eab3ec3e42d8ef739bb83a4dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_517c2230909d50ea32a88d4cca91f197b13da4bfe2adacdc9fdc4eb28cbab720->leave($__internal_517c2230909d50ea32a88d4cca91f197b13da4bfe2adacdc9fdc4eb28cbab720_prof);

        
        $__internal_50a48296cf9e7b37a986847318ffe15120a120eab3ec3e42d8ef739bb83a4dfb->leave($__internal_50a48296cf9e7b37a986847318ffe15120a120eab3ec3e42d8ef739bb83a4dfb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95f88404d5850745c42dbbf67f2afee38b4e3c536b3dd66f31b36d2dec633a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f88404d5850745c42dbbf67f2afee38b4e3c536b3dd66f31b36d2dec633a79->enter($__internal_95f88404d5850745c42dbbf67f2afee38b4e3c536b3dd66f31b36d2dec633a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ac56c21dbeb0626375132e94c73c19f887cd5c098e73b7d72992f9f8f1a0fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac56c21dbeb0626375132e94c73c19f887cd5c098e73b7d72992f9f8f1a0fd1->enter($__internal_9ac56c21dbeb0626375132e94c73c19f887cd5c098e73b7d72992f9f8f1a0fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9ac56c21dbeb0626375132e94c73c19f887cd5c098e73b7d72992f9f8f1a0fd1->leave($__internal_9ac56c21dbeb0626375132e94c73c19f887cd5c098e73b7d72992f9f8f1a0fd1_prof);

        
        $__internal_95f88404d5850745c42dbbf67f2afee38b4e3c536b3dd66f31b36d2dec633a79->leave($__internal_95f88404d5850745c42dbbf67f2afee38b4e3c536b3dd66f31b36d2dec633a79_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27014a56ccc8dbd8ffac275a5aa0e42169c33c194e742640fe9b8b71aebd6c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27014a56ccc8dbd8ffac275a5aa0e42169c33c194e742640fe9b8b71aebd6c2e->enter($__internal_27014a56ccc8dbd8ffac275a5aa0e42169c33c194e742640fe9b8b71aebd6c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_036e0abbef8e11913a74ac673a76320a6abc7ce93e79ec83b04ea52ea05ee11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036e0abbef8e11913a74ac673a76320a6abc7ce93e79ec83b04ea52ea05ee11e->enter($__internal_036e0abbef8e11913a74ac673a76320a6abc7ce93e79ec83b04ea52ea05ee11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_036e0abbef8e11913a74ac673a76320a6abc7ce93e79ec83b04ea52ea05ee11e->leave($__internal_036e0abbef8e11913a74ac673a76320a6abc7ce93e79ec83b04ea52ea05ee11e_prof);

        
        $__internal_27014a56ccc8dbd8ffac275a5aa0e42169c33c194e742640fe9b8b71aebd6c2e->leave($__internal_27014a56ccc8dbd8ffac275a5aa0e42169c33c194e742640fe9b8b71aebd6c2e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
