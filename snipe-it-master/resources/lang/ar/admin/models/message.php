<?php

return array(

    'does_not_exist' => 'الموديل غير موجود.',
    'no_association' => 'NO MODEL ASSOCIATED.',
    'no_association_fix' => 'This will break things in weird and horrible ways. Edit this asset now to assign it a model.',
    'assoc_users'	 => 'هذا الموديل مرتبط حاليا بواحد أو أكثر من الأصول ولا يمكن حذفه. يرجى حذف الأصول، ثم محاولة الحذف مرة أخرى. ',


    'create' => array(
        'error'   => 'لم يتم انشاء الموديل، يرجى إعادة المحاولة.',
        'success' => 'تم إنشاء الموديل بنجاح.',
        'duplicate_set' => 'يوجد مسبقا موديل بهذا الاسم، الشركة المصنعة ورقم الموديل.',
    ),

    'update' => array(
        'error'   => 'لم يتم تحديث الموديل، يرجى إعادة المحاولة',
        'success' => 'تم تحديث الموديل بنجاح.'
    ),

    'delete' => array(
        'confirm'   => 'هل تريد بالتأكيد حذف موديل الأصل هذا؟',
        'error'   => 'حدثت مشكلة أثناء حذف الموديل. حاول مرة اخرى.',
        'success' => 'تم حذف الموديل بنجاح.'
    ),

    'restore' => array(
        'error'   		=> 'لم تتم استعادة الموديل، يرجى إعادة المحاولة',
        'success' 		=> 'تم إستعادة الموديل بنجاح.'
    ),

    'bulkedit' => array(
        'error'   		=> 'لم يتم تغيير أي حقول، لذلك لم يتم تحديث أي شيء.',
        'success' 		=> 'تم تحديث الموديل.'
    ),

    'bulkdelete' => array(
        'error'   		    => 'لم يتم اختيار أي موديلات، لذلك لم يتم حذف أي شيء.',
        'success' 		    => 'تم حذف success_count: من الموديلات!',
        'success_partial' 	=> 'تم حذف:success_count: من الموديلات، ومع ذلك تعذر حذف fail_count: نظرًا لأنها لا تزال تحتوي على أصول مقترنة بها.'
    ),

);
