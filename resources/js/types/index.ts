import type { PageProps } from '@inertiajs/core';
import type { LucideIcon } from 'lucide-vue-next';

export interface Auth {
    user: User;
}

export interface NavItem {
    title: string;
    href: string;
    icon?: LucideIcon;
    isActive?: boolean;
}

export interface SharedData extends PageProps {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
}

interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
    role: Role;
}

interface Role {
    id: number;
    name: string;
    slug: string;
    created_at: string;
    updated_at: string;
}

export interface Task {
    id: number;
    title: string;
    description?: string;
    link?: string;
    priority: number;
    status: TaskStatus;
    created_at: string;
    updated_at: string;
}

enum TaskStatus {
    pending = 'pending',
    inprogress = 'in_progress',
    completed = 'completed',
}
