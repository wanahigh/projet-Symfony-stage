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
        $__internal_753717ef80691737eda691214881db65e61bffda5d2f955c9f105aa8235a3a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753717ef80691737eda691214881db65e61bffda5d2f955c9f105aa8235a3a35->enter($__internal_753717ef80691737eda691214881db65e61bffda5d2f955c9f105aa8235a3a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3e682bffcab0e18d1bc1135661592eaf71229debf50f32bd14d4eeb5308cd206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e682bffcab0e18d1bc1135661592eaf71229debf50f32bd14d4eeb5308cd206->enter($__internal_3e682bffcab0e18d1bc1135661592eaf71229debf50f32bd14d4eeb5308cd206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_753717ef80691737eda691214881db65e61bffda5d2f955c9f105aa8235a3a35->leave($__internal_753717ef80691737eda691214881db65e61bffda5d2f955c9f105aa8235a3a35_prof);

        
        $__internal_3e682bffcab0e18d1bc1135661592eaf71229debf50f32bd14d4eeb5308cd206->leave($__internal_3e682bffcab0e18d1bc1135661592eaf71229debf50f32bd14d4eeb5308cd206_prof);

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
