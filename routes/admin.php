<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\viewController;
use App\Http\Controllers\admin\ModuleController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LogSystemController;
use App\Http\Controllers\admin\UserGroupController;
use App\Http\Controllers\admin\KategoriProjectController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ------------------------------------------  Admin -----------------------------------------------------------------
Route::prefix('admin')->group(function () {
    Route::post('login/checkEmail', [AuthController::class, 'checkEmail'])->name('admin.login.checkEmail');
    Route::post('login/checkPassword', [AuthController::class, 'checkPassword'])->name('admin.login.checkPassword');
    Route::get('login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('loginProses', [AuthController::class, 'loginProses'])->name('admin.loginProses');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    
    Route::get('main-admin', [viewController::class, 'main_admin'])->name('main_admin');

    Route::middleware(['auth.admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        //Log Systems
        Route::get('log-systems', [LogSystemController::class, 'index'])->name('admin.logSystems');
        Route::get('log-systems/getData', [LogSystemController::class, 'getData'])->name('admin.logSystems.getData');
        Route::get('log-systems/getDataModule', [LogSystemController::class, 'getDataModule'])->name('admin.logSystems.getDataModule');
        Route::get('log-systems/getDataUser', [LogSystemController::class, 'getDataUser'])->name('admin.logSystems.getDataUser');
        Route::get('log-systems/getDetail{id}', [LogSystemController::class, 'getDetail'])->name('admin.logSystems.getDetail');
        Route::get('log-systems/clearLogs', [LogSystemController::class, 'clearLogs'])->name('admin.logSystems.clearLogs');
        Route::get('log-systems/generatePDF', [LogSystemController::class, 'generatePDF'])->name('admin.logSystems.generatePDF');
    
        //User Group
        Route::get('user-groups', [UserGroupController::class, 'index'])->name('admin.user_groups');
        Route::get('user-groups/add', [UserGroupController::class, 'add'])->name('admin.user_groups.add');
        Route::get('user-groups/getData', [UserGroupController::class, 'getData'])->name('admin.user_groups.getData');
        Route::post('user-groups/save', [UserGroupController::class, 'save'])->name('admin.user_groups.save');
        Route::get('user-groups/edit/{id}', [UserGroupController::class, 'edit'])->name('admin.user_groups.edit');
        Route::put('user-groups/update', [UserGroupController::class, 'update'])->name('admin.user_groups.update');
        Route::delete('user-groups/delete', [UserGroupController::class, 'delete'])->name('admin.user_groups.delete');
        Route::get('user-groups/getDetail-{id}', [UserGroupController::class, 'getDetail'])->name('admin.user_groups.getDetail');
        Route::post('user-groups/changeStatus',[UserGroupController::class, 'changeStatus'])->name('admin.user_groups.changeStatus');
        Route::post('user-groups/checkName',[UserGroupController::class, 'checkName'])->name('admin.user_groups.checkName');
        
        //User
        Route::get('users', [UserController::class, 'index'])->name('admin.users');
        Route::get('users/add', [UserController::class, 'add'])->name('admin.users.add');
        Route::get('users/getData', [UserController::class, 'getData'])->name('admin.users.getData');
        Route::post('users/save', [UserController::class, 'save'])->name('admin.users.save');
        Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('users/update', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete('users/delete', [UserController::class, 'delete'])->name('admin.users.delete');
        Route::get('users/getDetail-{id}', [UserController::class, 'getDetail'])->name('admin.users.getDetail');
        Route::get('users/getUserGroup', [UserController::class, 'getUserGroup'])->name('admin.users.getUserGroup');
        Route::post('users/changeStatus',[UserController::class, 'changeStatus'])->name('admin.users.changeStatus');
        Route::get('users/generateKode',[UserController::class, 'generateKode'])->name('admin.users.generateKode');
        Route::post('users/checkEmail',[UserController::class, 'checkEmail'])->name('admin.users.checkEmail');
        Route::post('users/checkKode',[UserController::class, 'checkKode'])->name('admin.users.checkKode');

        Route::get('users/arsip',[UserController::class, 'arsip'])->name('admin.users.arsip');
        Route::get('users/arsip/getDataArsip',[UserController::class, 'getDataArsip'])->name('admin.users.getDataArsip');
        Route::put('users/arsip/restore',[UserController::class, 'restore'])->name('admin.users.restore');
        Route::delete('users/arsip/forceDelete',[UserController::class, 'forceDelete'])->name('admin.users.forceDelete');
        
        //Profile
        Route::get('profile/{kode}', [ProfileController::class, 'index'])->name('admin.profile');
        Route::get('profile/getData', [ProfileController::class, 'getData'])->name('admin.profile.getData');
        Route::put('profile/update', [ProfileController::class, 'update'])->name('admin.profile.update');
        Route::get('profile/getDetail-{kode}', [ProfileController::class, 'getDetail'])->name('admin.profile.getDetail');
        Route::post('profile/checkEmail',[ProfileController::class, 'checkEmail'])->name('admin.profile.checkEmail');
        
        //Setting
        Route::get('settings', [SettingController::class, 'index'])->name('admin.settings');
        Route::put('settings/update', [SettingController::class, 'update'])->name('admin.settings.update');

        //Modul dan Modul Akses
        Route::get('module', [ModuleController::class, 'index'])->name('admin.module');
        Route::get('module/add', [ModuleController::class, 'add'])->name('admin.module.add');
        Route::get('module/getData', [ModuleController::class, 'getData'])->name('admin.module.getData');
        Route::post('module/save', [ModuleController::class, 'save'])->name('admin.module.save');
        Route::get('module/edit/{id}', [ModuleController::class, 'edit'])->name('admin.module.edit');
        Route::put('module/update', [ModuleController::class, 'update'])->name('admin.module.update');
        Route::delete('module/delete', [ModuleController::class, 'delete'])->name('admin.module.delete');
        Route::get('module/getDetail-{id}', [ModuleController::class, 'getDetail'])->name('admin.module.getDetail');

        //Kategori Project
        Route::get('kategori-project', [KategoriProjectController::class, 'index'])->name('admin.kategori_project');
        Route::get('kategori-project/add', [KategoriProjectController::class, 'add'])->name('admin.kategori_project.add');
        Route::get('kategori-project/getData', [KategoriProjectController::class, 'getData'])->name('admin.kategori_project.getData');
        Route::post('kategori-project/save', [KategoriProjectController::class, 'save'])->name('admin.kategori_project.save');
        Route::get('kategori-project/edit/{id}', [KategoriProjectController::class, 'edit'])->name('admin.kategori_project.edit');
        Route::put('kategori-project/update', [KategoriProjectController::class, 'update'])->name('admin.kategori_project.update');
        Route::delete('kategori-project/delete', [KategoriProjectController::class, 'delete'])->name('admin.kategori_project.delete');
        Route::get('kategori-project/getDetail-{id}', [KategoriProjectController::class, 'getDetail'])->name('admin.kategori_project.getDetail');
        Route::post('kategori-project/checkNama',[KategoriProjectController::class, 'checkNama'])->name('admin.kategori_project.checkNama');

        Route::get('kategori-project/arsip',[KategoriProjectController::class, 'arsip'])->name('admin.kategori_project.arsip');
        Route::get('kategori-project/arsip/getDataArsip',[KategoriProjectController::class, 'getDataArsip'])->name('admin.kategori_project.getDataArsip');
        Route::put('kategori-project/arsip/restore',[KategoriProjectController::class, 'restore'])->name('admin.kategori_project.restore');
        Route::delete('kategori-project/arsip/forceDelete',[KategoriProjectController::class, 'forceDelete'])->name('admin.kategori_project.forceDelete');

        //Project
        Route::get('project', [ProjectController::class, 'index'])->name('admin.project');
        Route::get('project/add', [ProjectController::class, 'add'])->name('admin.project.add');
        Route::get('project/getData', [ProjectController::class, 'getData'])->name('admin.project.getData');
        Route::get('project/getDataKategoriProject', [ProjectController::class, 'getDataKategoriProject'])->name('admin.project.getDataKategoriProject');
        Route::post('project/save', [ProjectController::class, 'save'])->name('admin.project.save');
        Route::get('project/edit/{id}', [ProjectController::class, 'edit'])->name('admin.project.edit');
        Route::get('project/detail/{nama}', [ProjectController::class, 'detail'])->name('admin.project.detail');
        Route::put('project/update', [ProjectController::class, 'update'])->name('admin.project.update');
        Route::delete('project/delete', [ProjectController::class, 'delete'])->name('admin.project.delete');
        Route::delete('project/deleteImage', [ProjectController::class, 'deleteImage'])->name('admin.project.deleteImage');
        Route::get('project/getDetail-{id}', [ProjectController::class, 'getDetail'])->name('admin.project.getDetail');
        Route::post('project/checkNama',[ProjectController::class, 'checkNama'])->name('admin.project.checkNama');

        Route::get('project/arsip',[ProjectController::class, 'arsip'])->name('admin.project.arsip');
        Route::get('project/arsip/getDataArsip',[ProjectController::class, 'getDataArsip'])->name('admin.project.getDataArsip');
        Route::put('project/arsip/restore',[ProjectController::class, 'restore'])->name('admin.project.restore');
        Route::delete('project/arsip/forceDelete',[ProjectController::class, 'forceDelete'])->name('admin.project.forceDelete');
    });
});
