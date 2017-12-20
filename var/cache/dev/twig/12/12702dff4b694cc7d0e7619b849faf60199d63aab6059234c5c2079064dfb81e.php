<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3c91a58fb73f2e39eecca3c3988711d4fcd17476b413cced255703c7e475fbc6 extends Twig_Template
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
        $__internal_b3732fe8be98d442d9767f9c012a7204b08c547c0aff97489bc29f8de88598e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3732fe8be98d442d9767f9c012a7204b08c547c0aff97489bc29f8de88598e9->enter($__internal_b3732fe8be98d442d9767f9c012a7204b08c547c0aff97489bc29f8de88598e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f794fedd75b52b5dfd6313e9d6c27719b5bad0d8aada9d8120ebe28545033acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f794fedd75b52b5dfd6313e9d6c27719b5bad0d8aada9d8120ebe28545033acb->enter($__internal_f794fedd75b52b5dfd6313e9d6c27719b5bad0d8aada9d8120ebe28545033acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b3732fe8be98d442d9767f9c012a7204b08c547c0aff97489bc29f8de88598e9->leave($__internal_b3732fe8be98d442d9767f9c012a7204b08c547c0aff97489bc29f8de88598e9_prof);

        
        $__internal_f794fedd75b52b5dfd6313e9d6c27719b5bad0d8aada9d8120ebe28545033acb->leave($__internal_f794fedd75b52b5dfd6313e9d6c27719b5bad0d8aada9d8120ebe28545033acb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
