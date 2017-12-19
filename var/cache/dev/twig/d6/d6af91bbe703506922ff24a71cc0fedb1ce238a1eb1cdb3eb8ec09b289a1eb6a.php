<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d4e5a30a3fb85996420d50dfce3d0ccaf879f513f7e9bc9c245689929e021b54 extends Twig_Template
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
        $__internal_ecad8742a27e2e90c3f65e334b143b61265558053d7d4cb7a1d3a2c2852aedbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecad8742a27e2e90c3f65e334b143b61265558053d7d4cb7a1d3a2c2852aedbc->enter($__internal_ecad8742a27e2e90c3f65e334b143b61265558053d7d4cb7a1d3a2c2852aedbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_bea21ecc3925b9d25406dec8b9a8c99190ee062bffe2b3c60412c6f036742912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea21ecc3925b9d25406dec8b9a8c99190ee062bffe2b3c60412c6f036742912->enter($__internal_bea21ecc3925b9d25406dec8b9a8c99190ee062bffe2b3c60412c6f036742912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ecad8742a27e2e90c3f65e334b143b61265558053d7d4cb7a1d3a2c2852aedbc->leave($__internal_ecad8742a27e2e90c3f65e334b143b61265558053d7d4cb7a1d3a2c2852aedbc_prof);

        
        $__internal_bea21ecc3925b9d25406dec8b9a8c99190ee062bffe2b3c60412c6f036742912->leave($__internal_bea21ecc3925b9d25406dec8b9a8c99190ee062bffe2b3c60412c6f036742912_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
