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
        $__internal_f5c2ffcb08f4a53ea6c00709bbcef54b75bf143f84ec7a931d7e27fb9e07330a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c2ffcb08f4a53ea6c00709bbcef54b75bf143f84ec7a931d7e27fb9e07330a->enter($__internal_f5c2ffcb08f4a53ea6c00709bbcef54b75bf143f84ec7a931d7e27fb9e07330a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_32785b4e7e7cacb1ab8b3f59e967e12dc3d39c83e269a1f1871af9b820ffeaf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32785b4e7e7cacb1ab8b3f59e967e12dc3d39c83e269a1f1871af9b820ffeaf1->enter($__internal_32785b4e7e7cacb1ab8b3f59e967e12dc3d39c83e269a1f1871af9b820ffeaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f5c2ffcb08f4a53ea6c00709bbcef54b75bf143f84ec7a931d7e27fb9e07330a->leave($__internal_f5c2ffcb08f4a53ea6c00709bbcef54b75bf143f84ec7a931d7e27fb9e07330a_prof);

        
        $__internal_32785b4e7e7cacb1ab8b3f59e967e12dc3d39c83e269a1f1871af9b820ffeaf1->leave($__internal_32785b4e7e7cacb1ab8b3f59e967e12dc3d39c83e269a1f1871af9b820ffeaf1_prof);

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
