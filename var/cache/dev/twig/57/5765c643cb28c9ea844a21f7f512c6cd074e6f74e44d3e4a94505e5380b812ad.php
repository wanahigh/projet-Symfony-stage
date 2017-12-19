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
        $__internal_7e585fbad72b90e3712aaf264b62a99b98fed5b9140cd62d352017e3019ebbb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e585fbad72b90e3712aaf264b62a99b98fed5b9140cd62d352017e3019ebbb2->enter($__internal_7e585fbad72b90e3712aaf264b62a99b98fed5b9140cd62d352017e3019ebbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fa9dab3ed2f753e22aee33bbac2a608b4f6bde45f95e184573e7747498c5120d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9dab3ed2f753e22aee33bbac2a608b4f6bde45f95e184573e7747498c5120d->enter($__internal_fa9dab3ed2f753e22aee33bbac2a608b4f6bde45f95e184573e7747498c5120d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7e585fbad72b90e3712aaf264b62a99b98fed5b9140cd62d352017e3019ebbb2->leave($__internal_7e585fbad72b90e3712aaf264b62a99b98fed5b9140cd62d352017e3019ebbb2_prof);

        
        $__internal_fa9dab3ed2f753e22aee33bbac2a608b4f6bde45f95e184573e7747498c5120d->leave($__internal_fa9dab3ed2f753e22aee33bbac2a608b4f6bde45f95e184573e7747498c5120d_prof);

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
