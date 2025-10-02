<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Survey Header -->
<div class="bg-gradient-to-br from-[#0d06c8] to-[#1a0f8a] py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                <?= esc($survey['title']) ?>
            </h1>
            <p class="text-lg text-white/90 mb-6">
                <?= esc($survey['description']) ?>
            </p>
            <div class="flex items-center justify-center space-x-6 text-white/80">
                <div class="flex items-center">
                    <i class="bi bi-clock mr-2 text-[#9eff6b]"></i>
                    <span><?= esc($survey['estimated_time']) ?></span>
                </div>
                <div class="flex items-center">
                    <i class="bi bi-list-ol mr-2 text-[#9eff6b]"></i>
                    <span><?= count($survey['questions']) ?> questions</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Flash Messages -->
<?php if (session()->getFlashdata('errors')): ?>
    <div class="bg-red-500/20 border border-red-500/30 text-red-300 px-6 py-4 mx-4 mt-8 rounded-lg max-w-4xl mx-auto">
        <div class="flex items-center mb-2">
            <i class="bi bi-exclamation-triangle-fill mr-3 text-xl"></i>
            <span class="font-semibold">Please correct the following errors:</span>
        </div>
        <ul class="list-disc list-inside ml-6 space-y-1">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="bg-red-500/20 border border-red-500/30 text-red-300 px-6 py-4 mx-4 mt-8 rounded-lg flex items-center max-w-4xl mx-auto">
        <i class="bi bi-exclamation-triangle-fill mr-3 text-xl"></i>
        <span><?= session()->getFlashdata('error') ?></span>
    </div>
<?php endif; ?>

<!-- Survey Form -->
<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <form action="/survey/<?= esc($survey['id']) ?>" method="POST" class="bg-white border border-secondary-200 rounded-2xl p-8">
                <?= csrf_field() ?>
                
                <?php foreach ($survey['questions'] as $index => $question): ?>
                    <div class="mb-8 <?= $index < count($survey['questions']) - 1 ? 'pb-8 border-b border-secondary-100' : '' ?>">
                        <!-- Question Header -->
                        <div class="mb-4">
                            <label class="block text-lg font-semibold text-secondary-900 mb-2">
                                <?= esc($question['question']) ?>
                                <?php if ($question['required']): ?>
                                    <span class="text-red-500 ml-1">*</span>
                                <?php endif; ?>
                            </label>
                        </div>

                        <!-- Question Input Based on Type -->
                        <?php switch ($question['type']): 
                            case 'text': ?>
                                <input type="text" 
                                       name="<?= esc($question['id']) ?>" 
                                       value="<?= old($question['id']) ?>"
                                       <?= $question['required'] ? 'required' : '' ?>
                                       class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] transition-colors"
                                       placeholder="<?= isset($question['placeholder']) ? esc($question['placeholder']) : '' ?>">
                                <?php break; ?>

                            <?php case 'email': ?>
                                <input type="email" 
                                       name="<?= esc($question['id']) ?>" 
                                       value="<?= old($question['id']) ?>"
                                       <?= $question['required'] ? 'required' : '' ?>
                                       class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] transition-colors"
                                       placeholder="<?= isset($question['placeholder']) ? esc($question['placeholder']) : '' ?>">
                                <?php break; ?>

                            <?php case 'tel': ?>
                                <input type="tel" 
                                       name="<?= esc($question['id']) ?>" 
                                       value="<?= old($question['id']) ?>"
                                       <?= $question['required'] ? 'required' : '' ?>
                                       class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] transition-colors"
                                       placeholder="<?= isset($question['placeholder']) ? esc($question['placeholder']) : '' ?>">
                                <?php break; ?>

                            <?php case 'textarea': ?>
                                <textarea name="<?= esc($question['id']) ?>" 
                                          rows="4" 
                                          <?= $question['required'] ? 'required' : '' ?>
                                          class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] transition-colors resize-vertical"
                                          placeholder="<?= isset($question['placeholder']) ? esc($question['placeholder']) : '' ?>"><?= old($question['id']) ?></textarea>
                                <?php break; ?>

                            <?php case 'select': ?>
                                <select name="<?= esc($question['id']) ?>" 
                                        <?= $question['required'] ? 'required' : '' ?>
                                        class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] transition-colors">
                                    <option value="">Select an option</option>
                                    <?php foreach ($question['options'] as $option): ?>
                                        <option value="<?= esc($option['value']) ?>" 
                                                <?= old($question['id']) === $option['value'] ? 'selected' : '' ?>>
                                            <?= esc($option['label']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php break; ?>

                            <?php case 'radio': ?>
                                <div class="space-y-3">
                                    <?php foreach ($question['options'] as $option): ?>
                                        <label class="flex items-center cursor-pointer">
                                            <input type="radio" 
                                                   name="<?= esc($question['id']) ?>" 
                                                   value="<?= esc($option['value']) ?>"
                                                   <?= old($question['id']) === $option['value'] ? 'checked' : '' ?>
                                                   <?= $question['required'] ? 'required' : '' ?>
                                                   class="w-4 h-4 text-[#9eff6b] border-secondary-300 focus:ring-[#9eff6b] focus:ring-2">
                                            <span class="ml-3 text-secondary-700"><?= esc($option['label']) ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                                <?php break; ?>

                            <?php case 'checkbox': ?>
                                <div class="space-y-3">
                                    <?php foreach ($question['options'] as $option): ?>
                                        <label class="flex items-start cursor-pointer">
                                            <input type="checkbox" 
                                                   name="<?= esc($question['id']) ?>[]" 
                                                   value="<?= esc($option['value']) ?>"
                                                   <?= is_array(old($question['id'])) && in_array($option['value'], old($question['id'])) ? 'checked' : '' ?>
                                                   class="w-4 h-4 text-[#9eff6b] border-secondary-300 rounded focus:ring-[#9eff6b] focus:ring-2 mt-1">
                                            <span class="ml-3 text-secondary-700"><?= esc($option['label']) ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                                <?php break; ?>

                            <?php case 'rating': ?>
                                <div class="flex items-center space-x-4">
                                    <?php for ($i = 1; $i <= $question['scale']; $i++): ?>
                                        <label class="flex flex-col items-center cursor-pointer">
                                            <input type="radio" 
                                                   name="<?= esc($question['id']) ?>" 
                                                   value="<?= $i ?>"
                                                   <?= old($question['id']) == $i ? 'checked' : '' ?>
                                                   <?= $question['required'] ? 'required' : '' ?>
                                                   class="w-4 h-4 text-[#9eff6b] border-secondary-300 focus:ring-[#9eff6b] focus:ring-2 mb-2">
                                            <span class="text-sm text-secondary-600 text-center">
                                                <?= $i ?>
                                                <?php if (isset($question['labels'][$i])): ?>
                                                    <br><span class="text-xs"><?= esc($question['labels'][$i]) ?></span>
                                                <?php endif; ?>
                                            </span>
                                        </label>
                                    <?php endfor; ?>
                                </div>
                                <?php break; ?>
                        <?php endswitch; ?>
                    </div>
                <?php endforeach; ?>

                <!-- Submit Button -->
                <div class="text-center pt-8">
                    <button type="submit" 
                            class="bg-[#9eff6b] hover:bg-[#8ee55a] text-secondary-900 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:ring-offset-2 inline-flex items-center">
                        <i class="bi bi-check-circle mr-2"></i>
                        Submit Survey
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<body data-page-type="survey">

<script>
document.addEventListener('DOMContentLoaded', function() {
    const surveyId = '<?= esc($survey['id']) ?>';
    
    // Track survey start
    GA4Tracker.trackSurveyInteraction(surveyId, 'survey_started');

    // Track form submission
    const surveyForm = document.querySelector('form[action*="survey"]');
    if (surveyForm) {
        surveyForm.addEventListener('submit', function(e) {
            const formData = new FormData(this);
            const answeredQuestions = Array.from(formData.keys()).length;
            
            GA4Tracker.trackSurveyInteraction(surveyId, 'survey_submitted', null);
            GA4Tracker.trackFormSubmission('survey', surveyId, {
                survey_title: '<?= esc($survey['title']) ?>',
                questions_answered: answeredQuestions,
                total_questions: <?= count($survey['questions']) ?>
            });
        });
    }

    // Track individual question interactions
    document.querySelectorAll('input, select, textarea').forEach(input => {
        input.addEventListener('change', function() {
            const questionId = this.name;
            GA4Tracker.trackSurveyInteraction(surveyId, 'question_answered', questionId);
        });
    });
});
</script>
