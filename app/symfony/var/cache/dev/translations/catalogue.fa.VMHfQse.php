<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa', array (
  'validators' => 
  array (
    'This value should be false.' => 'این مقدار باید نادرست(False) باشد.',
    'This value should be true.' => 'این مقدار باید درست(True) باشد.',
    'This value should be of type {{ type }}.' => 'این مقدار باید از نوع {{ type }} باشد.',
    'This value should be blank.' => 'این مقدار باید خالی باشد.',
    'The value you selected is not a valid choice.' => 'مقدار انتخاب شده شامل گزینه های معتبر نمی باشد.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'باید حداقل {{ limit }} گزینه انتخاب نمایید.|باید حداقل {{ limit }} گزینه انتخاب نمایید.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'حداکثر {{ limit }} گزینه می توانید انتخاب نمایید.|حداکثر {{ limit }} گزینه می توانید انتخاب نمایید.',
    'One or more of the given values is invalid.' => 'یک یا چند مقدار نامعتبر وجود دارد.',
    'The fields {{ fields }} were not expected.' => 'فیلدهای {{ fields }} شامل فیلدهای مورد انتظار نمی باشند.',
    'The fields {{ fields }} are missing.' => 'فیلدهای {{ fields }} کم هستند.',
    'This value is not a valid date.' => 'این مقدار یک تاریخ معتبر نمی باشد.',
    'This value is not a valid datetime.' => 'این مقدار یک تاریخ و زمان معتبر نمی باشد.',
    'This value is not a valid email address.' => 'این یک رایانامه معتبر نمی باشد.',
    'The file could not be found.' => 'فایل یافت نشد.',
    'The file is not readable.' => 'پرونده خواندنی نمی باشد.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است({{ size }} {{ suffix }}). حداکثر اندازه مجاز برابر با {{ limit }} {{ suffix }} می باشد.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'این نوع فایل مجاز نمی باشد({{ type }}). نوع های مجاز شامل {{ types }} می باشند.',
    'This value should be {{ limit }} or less.' => 'این مقدار باید کوچکتر و یا مساوی {{ limit }} باشد.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} می باشد.|بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} می باشد.',
    'This value should be {{ limit }} or more.' => 'این مقدار باید بزرگتر و یا مساوی {{ limit }} باشد.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'مقدار وارد شده بسیار کوتاه است.تعداد حروف وارد شده، باید حداقل شامل {{ limit }} کاراکتر باشد.|مقدار وارد شده بسیار کوتاه است.تعداد حروف وارد شده، باید حداقل شامل {{ limit }} کاراکتر باشد.',
    'This value should not be blank.' => 'این مقدار نباید خالی باشد.',
    'This value should not be null.' => 'این مقدار باید شامل چیزی باشد.',
    'This value should be null.' => 'این مقدار باید شامل چیزی نباشد.',
    'This value is not valid.' => 'این مقدار معتبر نمی باشد.',
    'This value is not a valid time.' => 'این مقدار یک زمان صحیح نمی باشد.',
    'This value is not a valid URL.' => 'این مقدار شامل یک URL معتبر نمی باشد.',
    'The two values should be equal.' => 'دو مقدار باید با یکدیگر برابر باشند.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است. حداکثر اندازه مجاز برابر با {{ limit }} {{ suffix }} می باشد.',
    'The file is too large.' => 'فایل بیش از اندازه بزرگ می باشد.',
    'The file could not be uploaded.' => 'بارگذاری فایل با شکست مواجه گردید.',
    'This value should be a valid number.' => 'این مقدار باید یک عدد معتبر باشد.',
    'This file is not a valid image.' => 'این فایل یک تصویر نمی باشد.',
    'This is not a valid IP address.' => 'این مقدار یک IP معتبر نمی باشد.',
    'This value is not a valid language.' => 'این مقدار یک زبان صحیح نمی باشد.',
    'This value is not a valid locale.' => 'این مقدار یک محل صحیح نمی باشد.',
    'This value is not a valid country.' => 'این مقدار یک کشور صحیح نمی باشد.',
    'This value is already used.' => 'این مقدار قبلا مورد استفاده قرار گرفته است.',
    'The size of the image could not be detected.' => 'اندازه تصویر قابل شناسایی نمی باشد.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'طول تصویر بسیار بزرگ است({{ width }}px). بیشینه طول مجاز {{ max_width }}px می باشد.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'طول تصویر بسیار کوچک است({{ width }}px). کمینه طول موردنظر {{ min_width }}px می باشد.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ارتفاع تصویر بسیار بزرگ است({{ height }}px). بیشینه ارتفاع مجاز {{ max_height }}px می باشد.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ارتفاع تصویر بسیار کوچک است({{ height }}px). کمینه ارتفاع موردنظر {{ min_height }}px می باشد.',
    'This value should be the user\'s current password.' => 'این مقدار می بایست کلمه عبور کنونی کاربر باشد.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => ' این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.| این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.',
    'The file was only partially uploaded.' => 'پرونده به صورت جزیی بارگذاری گردیده است.',
    'No file was uploaded.' => 'هیچ پرونده ای بارگذاری نگردیده است.',
    'No temporary folder was configured in php.ini.' => 'پوشه موقتی در php.ini پیکربندی نگردیده است.',
    'Cannot write temporary file to disk.' => 'فایل موقتی را نمی توان در دیسک نوشت.',
    'A PHP extension caused the upload to fail.' => 'یک اکستنشن PHP موجب شد که بارگذاری فایل با شکست مواجه گردد.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'این مجموعه می بایست دارای حداقل {{ limit }} عنصر یا بیشتر باشد.|این مجموعه می بایست دارای حداقل {{ limit }} عنصر یا بیشتر باشد.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'این مجموعه می بایست دارای حداکثر {{ limit }} عنصر یا کمتر باشد.|این مجموعه می بایست دارای حداکثر {{ limit }} عنصر یا کمتر باشد.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'این مجموعه می بایست به طور دقیق دارای {{ limit }} عنصر باشد.|این مجموعه می بایست به طور دقیق دارای {{ limit }} عنصر باشد.',
    'Invalid card number.' => 'شماره کارت نامعتبر می باشد.',
    'Unsupported card type or invalid card number.' => 'نوع کارت پشتیبانی نمی شود و یا شماره کارت نامعتبر می باشد.',
    'This is not a valid International Bank Account Number (IBAN).' => 'این یک شماره حساب بانک بین المللی معتبر نمی باشد(IBAN).',
    'This value is not a valid ISBN-10.' => 'این مقدار یک ISBN-10 معتبر نمی باشد.',
    'This value is not a valid ISBN-13.' => 'این مقدار یک ISBN-13 معتبر نمی باشد.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'این مقدار یک ISBN-10 صحیح و یا ISBN-13 معتبر نمی باشد.',
    'This value is not a valid ISSN.' => 'این مقدار یک ISSN معتبر نمی باشد.',
    'This value is not a valid currency.' => 'این مقدار یک واحد پول معتبر نمی باشد.',
    'This value should be equal to {{ compared_value }}.' => 'این مقدار باید برابر با {{ compared_value }} باشد.',
    'This value should be greater than {{ compared_value }}.' => 'این مقدار باید از {{ compared_value }} بیشتر باشد.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'این مقدار باید بزرگتر و یا مساوی با {{ compared_value }} باشد.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار باید با {{ compared_value_type }} {{ compared_value }} یکسان باشد.',
    'This value should be less than {{ compared_value }}.' => 'این مقدار باید کمتر از {{ compared_value }} باشد.',
    'This value should be less than or equal to {{ compared_value }}.' => 'این مقدار باید کمتر و یا مساوی با {{ compared_value }} باشد.',
    'This value should not be equal to {{ compared_value }}.' => 'این مقدار نباید با {{ compared_value }} برابر باشد.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار نباید با {{ compared_value_type }} {{ compared_value }} یکسان باشد.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'ابعاد({{ ratio }}) عکس بیش از حد بزرگ است.حداکثر ابعاد مجاز {{ max_ratio }} می باشد.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ابعاد({{ ratio }}) عکس بیش از حد کوچک است.حداقل ابعاد مجاز {{ min_ratio }} می باشد.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'این تصویر یک مربع({{ width }}x{{ height }}px) می باشد. تصویر مربع مجاز نمی باشد.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'این تصویر افقی({{ width }}x{{ height }}px) می باشد. تصویر افقی مجاز نمی باشد.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'این تصویر عمودی({{ width }}x{{ height }}px) می باشد. تصویر عمودی مجاز نمی باشد.',
    'An empty file is not allowed.' => 'پرونده خالی مجاز نمی باشد.',
    'The host could not be resolved.' => 'میزبان قابل حل نمی باشد.',
    'This value does not match the expected {{ charset }} charset.' => 'این مقدار مطابق با مقدار مورد انتظار {{ charset }} نمی باشد.',
    'This is not a valid Business Identifier Code (BIC).' => 'این مقدار یک(BIC) معتبر نمی باشد.',
    'Error' => 'خطا',
    'This is not a valid UUID.' => 'این مقدار یک UUID معتبر نمی باشد.',
    'This value should be a multiple of {{ compared_value }}.' => 'این مقدار باید چند برابر {{ compared_value }} باشد.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'این(BIC) با IBAN ارتباطی ندارد.',
    'This form should not contain extra fields.' => 'این فرم نباید شامل فیلد اضافه ای باشد.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'فایل بارگذاری شده بسیار بزرگ می باشد. لطفا فایل کوچکتری را بارگذاری نمایید.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'توکن CSRF نامعتبر می باشد. لطفا فرم را مجددا ارسال نمایید.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'خطایی هنگام احراز هویت رخ داده است.',
    'Authentication credentials could not be found.' => 'شرایط احراز هویت یافت نشد.',
    'Authentication request could not be processed due to a system problem.' => 'درخواست احراز هویت به دلیل  وجود مشکل در سیستم قابل پردازش نمی باشد.',
    'Invalid credentials.' => 'احراز هویت نامعتبر می باشد.',
    'Cookie has already been used by someone else.' => 'Cookie قبلا توسط شخص دیگری استفاده گردیده است.',
    'Not privileged to request the resource.' => 'دسترسی لازم برای درخواست از این منبع را دارا نمی باشید.',
    'Invalid CSRF token.' => 'توکن CSRF معتبر نمی باشد.',
    'No authentication provider found to support the authentication token.' => 'هیچ ارایه دهنده احراز هویتی برای پشتیبانی از توکن احراز هویت پیدا نشد.',
    'No session available, it either timed out or cookies are not enabled.' => 'هیچ جلسه‌ای در دسترس نمی باشد. این میتواند به دلیل پایان یافتن زمان و یا فعال نبودن کوکی ها باشد.',
    'No token could be found.' => 'هیچ توکنی پیدا نشد.',
    'Username could not be found.' => 'نام ‌کاربری پیدا نشد.',
    'Account has expired.' => 'حساب کاربری منقضی گردیده است.',
    'Credentials have expired.' => 'مجوزهای احراز هویت منقضی گردیده‌اند.',
    'Account is disabled.' => 'حساب کاربری غیرفعال می باشد.',
    'Account is locked.' => 'حساب کاربری قفل گردیده است.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'ویرایش %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'ایجاد %entity_label_singular%',
    'page_title.exception' => 'اخطار|اخطارها',
    'datagrid.no_results' => 'نتیجه‌ای یافت نشد',
    'paginator.first' => 'اول',
    'paginator.previous' => 'قبلی',
    'paginator.next' => 'بعدی',
    'paginator.last' => 'آخر',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'label.true' => 'بله',
    'label.false' => 'خیر',
    'label.empty' => 'خالی',
    'label.null' => 'تهی',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'شی PHP',
    'label.inaccessible' => 'غیرقابل دسترس',
    'label.inaccessible.explanation' => 'متد Getter برای این فیلد موجود نیست و یا Property عمومی تعریف نشده است',
    'label.form.empty_value' => 'هیچ',
    'action.entity_actions' => 'عملیات',
    'action.new' => 'افزودن %entity_label_singular%',
    'action.search' => 'جستجو',
    'action.detail' => 'نمایش',
    'action.edit' => 'ویرایش',
    'action.delete' => 'حذف',
    'action.cancel' => 'انصراف',
    'action.index' => 'بازگشت به لیست',
    'action.add_new_item' => 'افزودن آیتم جدید',
    'action.remove_item' => 'حذف آیتم',
    'action.choose_file' => 'انتخاب فایل',
    'delete_modal.title' => 'واقعا می‌خواهید این آیتم را حذف کنید؟',
    'delete_modal.content' => 'این عملیات غیرقابل بازگشت است.',
    'form.are_you_sure' => 'شما تغییرات ایجاد شده در این فرم را ذخیره نکرده‌اید.',
    'form.tab.error_badge_title' => 'یک ورودی نامعتبر است|%count% ورودی نا معتبر است',
    'user.logged_in_as' => 'ورود به عنوان',
    'user.unnamed' => 'کاربر بدون نام',
    'user.anonymous' => 'کاربر ناشناس',
    'user.sign_out' => 'خروج',
    'user.exit_impersonation' => 'خروج از impersonation',
    'login_page.username' => 'Username',
    'login_page.password' => 'Password',
    'login_page.sign_in' => 'Sign in',
    'exception.entity_not_found' => 'این آیتم دیگر در دسترس نیست',
    'exception.entity_remove' => 'این آیتم نمی‌تواند حذف شود، زیرا آیتم های وابسته‌ای دارد.',
    'exception.forbidden_action' => 'عملیات درخواستی در مورد این آیتم قابل انجام نیست.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Supprimer?',
    'vich_uploader.link.download' => 'Télécharger',
    'form.user.email' => 'Email',
    'form.user.password' => 'Password',
    'form.action.login' => 'Connexion',
    'Help' => 'Aide',
    'ID' => 'ID',
    'Name' => 'Name',
    'Description' => 'Description',
    'User' => 'User',
    'Dashboard' => 'Tableau de bord',
    'Ville' => 'Ville',
    'page.dashboard.title' => 'Tableau de bord',
    'City' => 'Ville',
    'Slug' => 'Slug',
    'Image' => 'Image',
    'form.label.delete' => 'Supprimer',
    'Supprimer' => 'Supprimer',
    'page.home.header.connexion' => 'Connexion',
    'Username' => 'Username',
    'Email' => 'Email',
    'entity.update' => 'Votre Entity à bien été modifier avec succès.',
    'form.user.name' => 'Name',
    'form.user.description' => 'Description',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Tableau de bord',
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'Modifier %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Créer "%entity_label_singular%"',
    'page_title.exception' => 'Erreur|Erreurs',
    'datagrid.hidden_results' => 'Certains résultats ne peuvent pas être affichés car vous n\'avez pas la permission',
    'datagrid.no_results' => 'Aucun résultat trouvé',
    'paginator.first' => 'Premier',
    'paginator.previous' => 'Précédent',
    'paginator.next' => 'Suivant',
    'paginator.last' => 'Dernier',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> sur <strong>%results%</strong>',
    'paginator.results' => '{0} Aucun résultat|{1} <strong>1</strong> résultat|]1,Inf] <strong>%count%</strong> résultats',
    'label.true' => 'Oui',
    'label.false' => 'Non',
    'label.empty' => 'Vide',
    'label.null' => 'Aucun(e)',
    'label.nullable_field' => 'Laisser vide',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Aucun accesseur n\'existe pour cette propriété ou celle-ci n\'est pas publique.',
    'label.form.empty_value' => 'Aucun(e)',
    'field.code_editor.view_code' => 'Voir le code',
    'field.text_editor.view_content' => 'Voir le contenu',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Créer %entity_label_singular%',
    'action.search' => 'Rechercher',
    'action.detail' => 'Voir',
    'action.edit' => 'Éditer',
    'action.delete' => 'Supprimer',
    'action.cancel' => 'Annuler',
    'action.index' => 'Retour à la liste',
    'action.deselect' => 'Désélectionner',
    'action.add_new_item' => 'Ajouter un nouvel élément',
    'action.remove_item' => 'Supprimer l\'élément',
    'action.choose_file' => 'Choisir un fichier',
    'action.close' => 'Fermer',
    'action.create' => 'Créer',
    'action.create_and_add_another' => 'Créer et ajouter un nouvel élément',
    'action.create_and_continue' => 'Créer et continuer l\'édition',
    'action.save' => 'Sauvegarder les modifications',
    'action.save_and_continue' => 'Sauvegarder et continuer l\'édition',
    'batch_action_modal.title' => 'Voulez-vous vraiment modifier les éléments sélectionnés?',
    'batch_action_modal.content' => 'Cette action est irréversible.',
    'batch_action_modal.action' => 'Procéder',
    'delete_modal.title' => 'Voulez-vous supprimer cet élément ?',
    'delete_modal.content' => 'Cette action est irréversible.',
    'filter.title' => 'Filtres',
    'filter.button.clear' => 'Effacer',
    'filter.button.apply' => 'Appliquer',
    'filter.label.is_equal_to' => 'est égal(e) à',
    'filter.label.is_not_equal_to' => 'est différent(e) de',
    'filter.label.is_greater_than' => 'est supérieur(e) à',
    'filter.label.is_greater_than_or_equal_to' => 'est supérieur(e) ou égal(e) à',
    'filter.label.is_less_than' => 'est inférieur(e) à',
    'filter.label.is_less_than_or_equal_to' => 'est inférieur(e) ou égal(e) à',
    'filter.label.is_between' => 'est entre',
    'filter.label.contains' => 'contient',
    'filter.label.not_contains' => 'ne contient pas',
    'filter.label.starts_with' => 'commence par',
    'filter.label.ends_with' => 'finit par',
    'filter.label.exactly' => 'est strictement égal(e) à',
    'filter.label.not_exactly' => 'est strictement différent(e) de',
    'filter.label.is_same' => 'est',
    'filter.label.is_not_same' => 'n\'est pas',
    'filter.label.is_after' => 'est postérieure à',
    'filter.label.is_after_or_same' => 'est postérieure à ou est le',
    'filter.label.is_before' => 'est antérieure à',
    'filter.label.is_before_or_same' => 'est antérieure à ou est le',
    'form.are_you_sure' => 'Vous n\'avez pas sauvegardé vos modifications.',
    'form.tab.error_badge_title' => '1 champ invalide|%count% champs invalides',
    'form.slug.confirm_text' => 'Si vous modifiez le slug, vous pouvez casser des liens sur d\'autres pages.',
    'user.logged_in_as' => 'Connecté en tant que',
    'user.unnamed' => 'Utilisateur sans nom',
    'user.anonymous' => 'Utilisateur anonyme',
    'user.sign_out' => 'Déconnexion',
    'user.exit_impersonation' => 'Arrêter l\'impersonnalisation',
    'login_page.username' => 'Identifiant',
    'login_page.password' => 'Mot de passe',
    'login_page.sign_in' => 'Connectez-vous',
    'exception.entity_not_found' => 'Cet élément n\'est plus disponible.',
    'exception.entity_remove' => 'Cet élément ne peut être supprimé car d\'autres éléments en dépendent.',
    'exception.forbidden_action' => 'L\'action demandée ne peut être exécutée sur cet élément.',
    'exception.insufficient_entity_permission' => 'Vous n\'êtes pas autorisé à accéder à cet élément.',
  ),
  'VichUploaderBundle' => 
  array (
    'form.label.delete' => 'Supprimer',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
