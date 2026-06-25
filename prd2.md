# PRODUCT REQUIREMENT DOCUMENT (PRD)

# FASE 2 — CORE SYSTEM & ADMIN PORTAL

## Tax Learning Platform

Version: 2.0

Status: Backend Development Phase

Prerequisite:
Phase 1 UI Approved

---

# 1. PRODUCT OVERVIEW

## Product Name

Tax Learning Platform

## Description

Fase 2 berfokus pada implementasi seluruh business logic, database, membership system, payment gateway, admin portal, dan fitur konsultasi chat realtime antara customer dan konsultan.

Setelah fase ini selesai, platform dapat digunakan secara operasional oleh customer, admin, dan konsultan.

---

# 2. OBJECTIVES

## Business Objectives

* Mengelola seluruh operasional platform dari satu sistem
* Menghasilkan revenue dari subscription
* Menyediakan layanan konsultasi perpajakan digital
* Monitoring aktivitas user secara realtime
* Mengurangi proses manual

---

## User Objectives

* Mendaftar dan login
* Berlangganan membership
* Mengakses training sesuai paket
* Berkonsultasi langsung dengan konsultan
* Melihat histori belajar

---

## Admin Objectives

* Mengelola user
* Mengelola training
* Mengelola pembayaran
* Mengelola membership
* Mengelola konsultasi
* Melihat laporan bisnis

---

# 3. USER ROLES

## Super Admin

Hak akses penuh.

### Permissions

* User Management
* Role Management
* Course Management
* Payment Management
* Consultation Management
* Reports
* CMS
* Settings

---

## Admin

### Permissions

* User Management
* Training Management
* Subscription Management
* Consultation Monitoring
* Payment Monitoring

---

## Consultant

### Permissions

* Melihat konsultasi
* Membalas konsultasi
* Mengubah status konsultasi
* Melihat histori customer

---

## Member User

### Permissions

* Mengakses training
* Melihat progress
* Berlangganan membership
* Membuat konsultasi
* Mengirim pesan

---

# 4. AUTHENTICATION & AUTHORIZATION

## Authentication

Laravel Breeze

### Features

* Register
* Login
* Logout
* Forgot Password
* Reset Password
* Email Verification

---

## Authorization

Role Based Access Control (RBAC)

Roles:

* Super Admin
* Admin
* Consultant
* User

---

# 5. USER MANAGEMENT

## User List

### Columns

* User ID
* Name
* Email
* Phone
* Membership
* Status
* Registration Date

---

## User Actions

* View User
* Edit User
* Suspend User
* Activate User
* Reset Password

---

## User Detail

### Sections

Profile

Subscription

Learning Progress

Transactions

Consultation History

---

# 6. TRAINING MANAGEMENT

## Category Management

### Features

* Create Category
* Edit Category
* Delete Category

---

## Course Management

### Features

* Create Course
* Edit Course
* Delete Course
* Publish Course
* Archive Course

### Fields

Title

Description

Thumbnail

Category

Level

Duration

Status

---

## Module Management

### Features

* Create Module
* Edit Module
* Sort Module

---

## Lesson Management

### Features

* Create Lesson
* Upload Video
* Reorder Lesson
* Delete Lesson

---

# 7. LEARNING MANAGEMENT

## Progress Tracking

### Features

* Auto Save Progress
* Continue Learning
* Completion Tracking

---

## Learning Analytics

### Metrics

* Completed Course
* In Progress Course
* Completion Percentage

---

# 8. MEMBERSHIP MANAGEMENT

## Subscription Packages

### Basic

30 Days Access

---

### Professional

90 Days Access

---

### Enterprise

365 Days Access

---

## Features

* Create Package
* Edit Package
* Delete Package
* Activate Package
* Deactivate Package

---

## Subscription Actions

* Upgrade
* Downgrade
* Renew
* Cancel

---

# 9. PAYMENT MANAGEMENT

## Payment Gateway

### Supported

Midtrans

Xendit

---

## Transaction Status

Pending

Paid

Expired

Failed

Refunded

---

## Transaction Features

* Payment Callback
* Invoice Generation
* Payment History
* Export Transaction

---

## Invoice Detail

Customer

Package

Payment Method

Amount

Status

Created Date

Paid Date

---

# 10. CONSULTATION CHAT SYSTEM

## Overview

Member dapat berkonsultasi langsung dengan admin atau konsultan melalui chat realtime dalam platform.

Sistem menggantikan kebutuhan konsultasi melalui WhatsApp.

---

# USER SIDE

## Menu

Consultation Chat

---

## Create Consultation

### Fields

Subject

Category

Message

Attachment

---

## Categories

* Pajak Pribadi
* Pajak Badan
* PPN
* Tax Planning
* Brevet
* Lainnya

---

## Consultation Features

* Realtime Chat
* Upload File
* Read Status
* Typing Indicator
* Notification
* Consultation History

---

## Attachment Support

PDF

DOCX

XLSX

PNG

JPG

Maximum:

10 MB

---

# CONSULTATION STATUS

Open

Assigned

In Progress

Waiting Customer

Resolved

Closed

---

# CONSULTANT SIDE

## Consultation Queue

### Features

* View Consultation
* Reply Message
* Assign Status
* Close Consultation

---

## Customer Profile

### Information

Name

Email

Phone

Membership

Consultation History

---

# ADMIN SIDE

## Consultation Dashboard

### Metrics

Total Consultation

Open Consultation

Resolved Consultation

Average Response Time

Average Resolution Time

---

## Consultation Management

### Features

* View All Conversations
* Assign Consultant
* Reassign Consultant
* Close Consultation
* Export Consultation

---

## Internal Notes

Admin dapat membuat catatan internal.

Catatan tidak terlihat oleh customer.

---

# 11. CMS MANAGEMENT

## Homepage

* Hero
* Features
* Pricing
* Testimonials
* FAQ

---

## Blog

### Features

* Create Article
* Edit Article
* Publish Article
* Archive Article

---

# 12. REPORTING MODULE

## Revenue Report

### Metrics

* Daily Revenue
* Monthly Revenue
* Yearly Revenue
* Revenue by Package

---

## User Report

### Metrics

* New Users
* Active Users
* Conversion Rate
* Retention Rate

---

## Learning Report

### Metrics

* Most Popular Course
* Completion Rate
* Learning Hours

---

## Consultation Report

### Metrics

* Total Consultation
* Average Response Time
* Average Resolution Time
* Consultant Performance

---

# 13. NOTIFICATION SYSTEM

## Channels

Database Notification

Email Notification

Realtime Notification

---

## Trigger Events

* New Registration
* Payment Success
* Subscription Expired
* New Consultation
* New Chat Message
* Consultation Closed

---

# 14. AUDIT LOGS

## Log Information

User

Action

Module

Timestamp

IP Address

Device

---

## Logged Activities

* Login
* Logout
* CRUD Operations
* Payment Actions
* Consultation Actions

---

# 15. TECHNOLOGY STACK

## Framework

Laravel 12

---

## Admin Panel

FilamentPHP v4

---

## Frontend

Blade

TailwindCSS

---

## Interactivity

Livewire 3

---

## Realtime

Laravel Reverb

---

## Database

PostgreSQL

---

## Cache

Redis

---

## Storage

MinIO / S3 Compatible Storage

---

## Queue

Redis Queue

---

## Search

Laravel Scout

---

# 16. DATABASE MODULES

users

roles

permissions

subscriptions

subscription_packages

transactions

invoices

categories

courses

modules

lessons

lesson_progress

consultations

consultation_messages

consultation_notes

notifications

audit_logs

settings

blog_posts

---

# 17. SECURITY REQUIREMENTS

* RBAC Authorization
* CSRF Protection
* XSS Protection
* SQL Injection Protection
* Rate Limiting
* Secure File Upload
* Activity Logging

---

# 18. ACCEPTANCE CRITERIA

## User

✓ Register

✓ Login

✓ Subscribe Package

✓ Access Training

✓ Track Learning Progress

✓ Create Consultation

✓ Realtime Chat

---

## Consultant

✓ Receive Consultation

✓ Reply Consultation

✓ Change Status

✓ Close Consultation

---

## Admin

✓ Manage Users

✓ Manage Courses

✓ Manage Subscription

✓ Manage Payment

✓ Monitor Consultation

✓ View Reports

✓ Manage CMS

---

## System

✓ Realtime Notification

✓ Realtime Chat

✓ Payment Callback

✓ Progress Tracking

✓ Audit Logs

✓ Role Permission

---

# DELIVERABLES

1. Authentication System
2. User Management
3. Course Management
4. Learning Management
5. Membership System
6. Payment Gateway Integration
7. Consultation Chat Realtime
8. Admin Portal (Filament)
9. Reporting Dashboard
10. CMS Management
11. Notification System
12. Audit Logs

END OF DOCUMENT
