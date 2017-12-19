<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b37bc502eb42b863c78dba08d2e1f4ef1425c382d72819f82dc1e9257de360d3 extends Twig_Template
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
        $__internal_008de924565f370f2faa192dc5daf56c57c36b9c2a9bb448640d75f717873066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008de924565f370f2faa192dc5daf56c57c36b9c2a9bb448640d75f717873066->enter($__internal_008de924565f370f2faa192dc5daf56c57c36b9c2a9bb448640d75f717873066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3cce3594a98bf7b52375f3fb7c864583beae36bb1b6796900636818cbe66bf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cce3594a98bf7b52375f3fb7c864583beae36bb1b6796900636818cbe66bf47->enter($__internal_3cce3594a98bf7b52375f3fb7c864583beae36bb1b6796900636818cbe66bf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_008de924565f370f2faa192dc5daf56c57c36b9c2a9bb448640d75f717873066->leave($__internal_008de924565f370f2faa192dc5daf56c57c36b9c2a9bb448640d75f717873066_prof);

        
        $__internal_3cce3594a98bf7b52375f3fb7c864583beae36bb1b6796900636818cbe66bf47->leave($__internal_3cce3594a98bf7b52375f3fb7c864583beae36bb1b6796900636818cbe66bf47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
