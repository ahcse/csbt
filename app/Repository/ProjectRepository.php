<?php

namespace App\Repository;
use App\Models\ClientInformation\Project;

class ProjectRepository
{
    public function getSelectedFilterVariables($request)
    {
        $selectedProject = $selectedStatus = $selectedClient = '';
        if($request->selected_status) {
           $selectedStatus = $request->selected_status;
        }
        if($request->selected_client_id) {
            $selectedClient = $request->selected_client_id;
        }
        if($request->selected_project_id) {
            $selectedProject = $request->selected_project_id;
        }

        return [
            'selected_status'     => $selectedStatus,
            'selected_client_id'  => $selectedClient,
            'selected_project_id' => $selectedProject
        ];
    }


    public function getProjectDetails($projectId)
    {
        return Project::with('client')->find($projectId);
    }
}
