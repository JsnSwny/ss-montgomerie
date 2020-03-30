<?php
    use SilverStripe\Forms\Form;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\EmailField;
    use SilverStripe\Forms\TitleField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\FormAction;
    use SilverStripe\Forms\RequiredFields;
    use SilverStripe\Control\Email\Email;

    

    class ContactUsPage extends Page {

    }

    class ContactUsPageController extends PageController {
        private static $description = "Contact Form";
        private static $allowed_actions = array (
            'CommentForm'
        );

        public function CommentForm() {
            $form = Form::create(
                $this,
                __FUNCTION__,
                FieldList::create(
                    TextField::create('Name', '')
                        ->setTitle('Name: ')
                        ->addExtraClass('contact__input'),
                    EmailField::create('Email', '')
                        ->setTitle('Email: ')
                        ->addExtraClass('contact__input'),
                    TextareaField::create('Message', '')
                        ->setTitle('Message: ')
                        ->addExtraClass('contact__input'),
                ),
                FieldList::create(
                    FormAction::create('handleMessage', 'Post Message')
                    ->setUseButtonTag(true)
                    ->addExtraClass('contact__button')
                ),
                RequiredFields::create('Name', 'Email', 'Message')
            )->addExtraClass('contact__form');
            return $form;
        }

        public function handleMessage($data, $form) {
            return $this->redirectBack();
        }

    }