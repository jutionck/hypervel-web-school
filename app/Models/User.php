<?php

declare (strict_types = 1);

namespace App\Models;

use App\Models\AIAssistant\AiTutorSession;
use App\Models\CareerDevelopment\CareerAssessment;
use App\Models\DigitalLibrary\BookLoan;
use App\Models\DigitalLibrary\BookReview;
use App\Models\ELearning\AssignMent;
use App\Models\ELearning\Discussion;
use App\Models\ELearning\DiscussionReply;
use App\Models\ELearning\LearningMaterial;
use App\Models\ELearning\Quiz;
use App\Models\ELearning\VideoConference;
use App\Models\Grading\Compentency;
use App\Models\Grading\Grade;
use App\Models\Grading\Report;
use App\Models\Logs\AuditLog;
use App\Models\Monetization\MarketplaceProduct;
use App\Models\Monetization\Transaction;
use App\Models\OnlineExam\Exam;
use App\Models\OnlineExam\QuestionBank;
use App\Models\PPDB\PpdbAnnouncement;
use App\Models\PPDB\PpdbDocument;
use App\Models\PPDB\PpdbTest;
use App\Models\SchoolManagement\Staff;
use App\Models\SchoolManagement\Student;
use App\Models\SchoolManagement\Teacher;
use Hypervel\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $primaryKey = 'id';
    protected $keyType    = 'string';
    public $incrementing  = false;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'full_name',
        'phone',
        'avatar_url',
        'is_active',
        'last_login',
        'remember_token',
        'email_verified_at',
    ];

    // Relationships
    public function parent()
    {
        return $this->hasOne(Parent::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

    public function ppdbDocumentsVerified()
    {
        return $this->hasMany(PpdbDocument::class, 'verified_by');
    }

    public function ppdbTestsAdministered()
    {
        return $this->hasMany(PpdbTest::class, 'administrator_id');
    }

    public function ppdbAnnouncementsPublished()
    {
        return $this->hasMany(PpdbAnnouncement::class, 'published_by');
    }

    public function learningMaterialsCreated()
    {
        return $this->hasMany(LearningMaterial::class, 'created_by');
    }

    public function assignmentsCreated()
    {
        return $this->hasMany(AssignMent::class, 'created_by');
    }

    public function quizzesCreated()
    {
        return $this->hasMany(Quiz::class, 'created_by');
    }

    public function discussionsCreated()
    {
        return $this->hasMany(Discussion::class, 'created_by');
    }

    public function discussionRepliesCreated()
    {
        return $this->hasMany(DiscussionReply::class, 'created_by');
    }

    public function videoConferencesCreated()
    {
        return $this->hasMany(VideoConference::class, 'created_by');
    }

    public function gradesCreated()
    {
        return $this->hasMany(Grade::class, 'created_by');
    }

    public function competenciesCreated()
    {
        return $this->hasMany(Compentency::class, 'created_by');
    }

    public function reportsCreated()
    {
        return $this->hasMany(Report::class, 'created_by');
    }

    public function questionsCreated()
    {
        return $this->hasMany(QuestionBank::class, 'created_by');
    }

    public function examsCreated()
    {
        return $this->hasMany(Exam::class, 'created_by');
    }

    public function bookLoans()
    {
        return $this->hasMany(BookLoan::class, 'borrower_id');
    }

    public function bookReviews()
    {
        return $this->hasMany(BookReview::class, 'reviewer_id');
    }

    public function aiTutorSessions()
    {
        return $this->hasMany(AiTutorSession::class);
    }

    public function careerAssessmentsCreated()
    {
        return $this->hasMany(CareerAssessment::class, 'created_by');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function marketplaceProductsCreated()
    {
        return $this->hasMany(MarketplaceProduct::class, 'created_by');
    }

    public function auditLogs()
    {
        return $this->hasMany(AuditLog::class);
    }
}
