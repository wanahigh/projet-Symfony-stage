<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c41015bd356336e1d51cc7fc6517077d2a25a1cd036a98a187e57101a5b17586 extends Twig_Template
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
        $__internal_432d945930757e07b56546186b0b9d96b586af73a11a5ac935911f9aa7caf7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432d945930757e07b56546186b0b9d96b586af73a11a5ac935911f9aa7caf7d0->enter($__internal_432d945930757e07b56546186b0b9d96b586af73a11a5ac935911f9aa7caf7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_12d14c615e32a5d82fe53518451a485b760ce72d291e26a8c883d5542b00771f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d14c615e32a5d82fe53518451a485b760ce72d291e26a8c883d5542b00771f->enter($__internal_12d14c615e32a5d82fe53518451a485b760ce72d291e26a8c883d5542b00771f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_432d945930757e07b56546186b0b9d96b586af73a11a5ac935911f9aa7caf7d0->leave($__internal_432d945930757e07b56546186b0b9d96b586af73a11a5ac935911f9aa7caf7d0_prof);

        
        $__internal_12d14c615e32a5d82fe53518451a485b760ce72d291e26a8c883d5542b00771f->leave($__internal_12d14c615e32a5d82fe53518451a485b760ce72d291e26a8c883d5542b00771f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
