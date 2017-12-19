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
        $__internal_4185201c0f53080e0537450801a0e29a61c33b1efecb71b6dc1caaa484490221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4185201c0f53080e0537450801a0e29a61c33b1efecb71b6dc1caaa484490221->enter($__internal_4185201c0f53080e0537450801a0e29a61c33b1efecb71b6dc1caaa484490221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_81f685a4a90b493c48d9069b393a5884ea886c6ebbe682280087246d13bbb9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f685a4a90b493c48d9069b393a5884ea886c6ebbe682280087246d13bbb9a0->enter($__internal_81f685a4a90b493c48d9069b393a5884ea886c6ebbe682280087246d13bbb9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4185201c0f53080e0537450801a0e29a61c33b1efecb71b6dc1caaa484490221->leave($__internal_4185201c0f53080e0537450801a0e29a61c33b1efecb71b6dc1caaa484490221_prof);

        
        $__internal_81f685a4a90b493c48d9069b393a5884ea886c6ebbe682280087246d13bbb9a0->leave($__internal_81f685a4a90b493c48d9069b393a5884ea886c6ebbe682280087246d13bbb9a0_prof);

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
