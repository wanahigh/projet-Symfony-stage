<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eebf265b945351ff1ae5e8fbf136104642ccdcfb0407c89cb770a87f07478daf extends Twig_Template
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
        $__internal_fceaccbecfc01d7c1eee38b3e14c20d541a9a1262fa01fd8382ba72cae80b20f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fceaccbecfc01d7c1eee38b3e14c20d541a9a1262fa01fd8382ba72cae80b20f->enter($__internal_fceaccbecfc01d7c1eee38b3e14c20d541a9a1262fa01fd8382ba72cae80b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8adf7f30d12e8e565593b3a17cfe2ec54367591b1681b1289813b5957dc66fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adf7f30d12e8e565593b3a17cfe2ec54367591b1681b1289813b5957dc66fb4->enter($__internal_8adf7f30d12e8e565593b3a17cfe2ec54367591b1681b1289813b5957dc66fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_fceaccbecfc01d7c1eee38b3e14c20d541a9a1262fa01fd8382ba72cae80b20f->leave($__internal_fceaccbecfc01d7c1eee38b3e14c20d541a9a1262fa01fd8382ba72cae80b20f_prof);

        
        $__internal_8adf7f30d12e8e565593b3a17cfe2ec54367591b1681b1289813b5957dc66fb4->leave($__internal_8adf7f30d12e8e565593b3a17cfe2ec54367591b1681b1289813b5957dc66fb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
